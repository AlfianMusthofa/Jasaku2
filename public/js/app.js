const gender1 = document.getElementById('gender1');
const gender2 = document.getElementById('gender2');
const hiddenInput = document.getElementById('selectedGender');

function toggleGender(selected, other) {
   selected.classList.add('active');
   selected.classList.remove('inactive');
   other.classList.remove('active');
   other.classList.add('inactive');

   hiddenInput.value = selected === gender1 ? 'Laki-laki' : 'Perempuan';
}

gender1.addEventListener('click', () => toggleGender(gender1, gender2));
gender2.addEventListener('click', () => toggleGender(gender2, gender1));


function myFunction() {
   document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
   if (!event.target.matches('.dropbtn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
         var openDropdown = dropdowns[i];
         if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
         }
      }
   }
}

const durationBtn = document.getElementById('durationBtn')
durationBtn.addEventListener('click', () => console.log('Pressed'))