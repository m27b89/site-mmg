const column = document.querySelector("#coulumn");
let dataElements = [];

fetch("core/selectPrice.php")
.then(response => response.json())
.then(data => {

    dataElements = data;
    let doneDataElements = "";

    dataElements.forEach(element => {
        doneDataElements += `
        <div class="advantages__column-inner">
            <div class="advantages__img">
                <img src="advantages/img/${element.img}" alt="img" class="advaneages__img-item">
            </div>
                <h1 class="advantages__title">${element.title}</h1>
            <p class="advantages__description item-subscribe">${element.description}</p>
            <div class="advantages__info">
                <p class="advantages__date item-subscribe">${timeConverter(element.time_add)}</p>
                <p class="advantages__comment item-subscribe">Comment: ${element.comments}</p>
            </div>
        </div>
        `;
    });
    column.innerHTML += doneDataElements; 
});

function timeConverter(UNIX_timestamp){
    var a = new Date(UNIX_timestamp * 1000);
    var months = ['01','02','03','04','05','06','07','08','09','10','11','12'];
    var year = a.getFullYear();
    var month = months[a.getMonth()];
    var date = a.getDate();
    var time = `${year}-${month}-${date}`;
    return time;
  }