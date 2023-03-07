
const myForm = document.getElementById("form");

myForm.addEventListener("submit", (event) => {
  event.preventDefault();
  sendData();
});

function sendData() {
    const formdata = new FormData(myForm);
    fetch("rest.php", {
      method: "POST",
      body: formdata,
    })
      .then((response) => response.json())
      .then((data) => console.log(data))
      .catch((error) => console.log(error)
      );
  }
  function fetchData() {
    fetch('rest.php')
      .then(response => response.json())
      .then(data => {
        const tableBody = document.querySelector('#myTable tbody');
        tableBody.innerHTML = '';
  
        data.forEach(row => {
          const tr = document.createElement('tr');
          tr.innerHTML = `
            <td>${row.dic_id}</td>
            <td>${row.vocap	}</td>
            <td>${row.type_code}</td>
            <td>${row.Mean}</td>
          `;
          tableBody.appendChild(tr);
        });
      });
  }
  window.addEventListener('load', fetchData);



  

