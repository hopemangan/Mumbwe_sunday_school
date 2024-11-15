
function draw_graph(type,title,page,insert, name_given, data_passed){
    var requestData = new XMLHttpRequest
    const avg = []
        //const names = ['january', 'feb', 'march', 'april', 'may', 'june', 'july', 'august', 'sept', 'oct', 'November', 'December']
        const names = []

    var i = 0
    requestData.open('GET', page)

    requestData.onload = function() {
        
        students_pefo = JSON.parse( requestData.responseText)

        students_pefo.forEach(dts => {
            avg[i] = dts.avg
            names[i] =dts.name
            i++
        })

            // 2. Student Performance Chart (Teacher Side)
    const performanceCtx = document.getElementById(insert).getContext('2d');
    new Chart(performanceCtx, {
      type: type,
      data: {
        labels: names,
        datasets: [{
          label: title,
          data: avg,
          backgroundColor: 'rgba(0, 115, 230, 0.7)',
          borderColor: 'rgba(0, 115, 230, 1)',
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        plugins: { legend: { display: true } },
        scales: { y: { beginAtZero: true, max: 100 } }
      }
    });
 
    }
    requestData.send()
  
}

function createCards(){
  var requestData = new XMLHttpRequest
  const space = document.querySelector(".cards-curri");

    requestData.open('GET', '../data/curriculum-data.php')

    requestData.onload = function() {
        
        students_pefo = JSON.parse( requestData.responseText)

        students_pefo.forEach(dts => {
          const courseDataDiv = document.createElement('div');
          courseDataDiv.classList.add('course-data');
          courseDataDiv.innerHTML = `
              <h3>${dts.name}</h3>
              <p>Progress: ${dts.avg}%</p>
              <p>Duration: ${dts.CourseYear}</p>
          `;
          space.appendChild(courseDataDiv);
        })
}
requestData.send()
}
