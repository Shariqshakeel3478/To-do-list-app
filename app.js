document.getElementById('all').addEventListener('click', function () {
    location.href = 'all_notes.html'
})


console.log("running")

// alert for validation
function require(event){
    let input = document.getElementById("floatingInput");
    if(input.value === "") {
        alert("Enter task please");
        return false;
    }
}


// read data

fetch('read.php')
.then(response=>response.json())
.then(data=>{
    console.log(data)
    let ul = document.getElementById('ul')
    ul.innerHTML = ''
    data.forEach(task => {
    ul.innerHTML += `
    <li class="mb-3">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">${task.tasks}</h5>
          <p class="card-text text-muted">${task.description}</p>
          
          <div class="d-flex justify-content-between align-items-center mt-3">
            <small class="text-body-secondary">
              <i class="fa-solid fa-calendar me-1"></i> ${task.due_date}
            </small>
            
            <div>
              <button class="btn btn-sm btn-outline-primary me-2">
                <i class="fa-solid fa-pencil"></i>
              </button>
              <button class="btn btn-sm btn-outline-danger">
                <i class="fa-solid fa-xmark"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </li>`;
});

    
})

