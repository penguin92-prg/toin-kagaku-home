window.addEventListener("load", function(){
  const clockItv = setInterval(updateClock, 1000);

  fetch("/asset/php/getLinks.php")
  .then(response => response.json())
  .then(data => {
    data.forEach(link => {
      console.log(link);
      let linkElem = document.createElement("a");
      linkElem.href = "./" + link.url + "/";

      let linkTitle = document.createElement("h3");
      linkTitle.innerText = link.title;

      let linkParam = document.createElement("h4");
      linkParam.innerText = link.date + "　" + link.creator;

      let linkDesc = document.createElement("p");
      linkDesc.innerText = link.description;

      linkElem.appendChild(linkTitle);
      linkElem.appendChild(linkParam);
      linkElem.appendChild(linkDesc);

      document.getElementById("link").appendChild(linkElem);
    })
  });
});

function updateClock(){
  const now = new Date();

  const year = now.getFullYear();
  const month = now.getMonth() + 1;
  const date = now.getDate();

  const hour = now.getHours();
  const minute = now.getMinutes();
  const second = now.getSeconds();

  let temp = year + "/" + month + "/" + (date < 10 ? "0" : "") + date + " " + hour;
  temp += (minute < 10 ? ":0" : ":") + minute;
  temp += (second < 10 ? ":0" : ":") + second;

  document.querySelector("header>p").innerHTML = temp;
}