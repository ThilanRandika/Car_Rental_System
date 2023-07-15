let scrollContainer = document.querySelector(".car_categories");
        let backbtn = document.getElementById("backBtn");
        let nextBtn = document.getElementById("nextBtn");

        //scroll by mouse wheel
        scrollContainer.addEventListener("wheel", (evt) => {
            evt.preventDefault();
            scrollContainer.scrollLeft += evt.deltaY;
        });
        
        //scroll by buttons
        nextBtn.addEventListener("click", ()=>{
            scrollContainer.style.scrollBehavior="smooth";
            scrollContainer.scrollLeft += 900;
        });
        backBtn.addEventListener("click", ()=>{
            scrollContainer.style.scrollBehavior="smooth";
            scrollContainer.scrollLeft -= 900;
        });

        //automatically scrolling
        let autoScrollAmount = 300;
        let autoScrollDelay = 3000;
        let autoScrollInterval;

        function scrollContainerByAmount(){
          scrollContainer.style.scrollBehavior = "smooth";
          scrollContainer.scrollLeft += autoScrollAmount;
          // Check if reached the end of the scroll list, then jump to the beginning
          if (scrollContainer.scrollLeft >= scrollContainer.scrollWidth - scrollContainer.clientWidth) {
            scrollContainer.scrollLeft = 0;
          }
        }

        function startAutoScroll() {
          autoScrollInterval = setInterval(scrollContainerByAmount, autoScrollDelay);
        }

        function pauseAutoScroll() {
          clearInterval(autoScrollInterval);
        }

        function resumeAutoScroll() {
          startAutoScroll();
        }

        // Pause auto-scrolling on category hover
        let categories = document.getElementsByClassName("category");
        for (let i = 0; i < categories.length; i++) {
          categories[i].addEventListener("mouseover", pauseAutoScroll);
          categories[i].addEventListener("mouseout", resumeAutoScroll);
        }

        startAutoScroll();



//car details

var car = document.querySelectorAll('.car');
var when_hidden = document.querySelectorAll('.when_details_hidden');
var expanded_details = document.querySelectorAll('.car_details');


car.forEach(function(car_item, index){
  car_item.addEventListener('click', function(){
    when_hidden[index].classList.toggle('hide');
    expanded_details[index].classList.toggle('show');
  });
});



