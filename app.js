document.getElementById('all').addEventListener('click', function () {
    location.href = 'all_notes.html'
})


fetch('read.php')
.then(response=>response.json())
.then(data=>{
    console.log(data)
    let ul = document.getElementById('ul')
    ul.innerHTML = ''
    data.forEach(task => {
        ul.innerHTML+= `<li class="task">
      <input type="radio" id="task-1" />
      <p>${task.tasks}</p>
      <div class="due">
        <i class="fa-solid fa-calendar"></i>
        <p>${task.due_date}</p>
      </div>
      <div class="buttons">
        <button><i class="fa-solid fa-pencil"></i></button>
        <button><i class="fa-solid fa-xmark"></i></button>
      </div>
    </li>`;
    });
    

    
})

