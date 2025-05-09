document.addEventListener("DOMContentLoaded", () => {
    console.log("Website Loaded!");
});

window.onload = function () {
        const monthSelect = document.getElementById("dobMonth");
        const daySelect = document.getElementById("dobDay");
        const yearSelect = document.getElementById("dobYear");
    
        const months = [
            "January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];
    
        months.forEach((month, index) => {
            const option = document.createElement("option");
            option.value = index + 1;
            option.text = month;
            monthSelect.add(option);
        });
    
        for (let i = 1; i <= 31; i++) {
            const option = document.createElement("option");
            option.value = i;
            option.text = i;
            daySelect.add(option);
        }
    
        const currentYear = new Date().getFullYear();
        for (let i = currentYear; i >= 1900; i--) {
            const option = document.createElement("option");
            option.value = i;
            option.text = i;
            yearSelect.add(option);
        }
    };
    
    function validateForm() {
        const title = document.getElementById("title").value.trim();
        const firstName = document.getElementById("firstName").value.trim();
        const lastName = document.getElementById("lastName").value.trim();
    
        if (!title || !firstName || !lastName) {
            alert("Please fill out all name fields.");
            return false;
        }
    
        return true;
    }
    function nextStep() {
        document.getElementById('step1').classList.remove('active');
        document.getElementById('step2').classList.add('active');
    }
    
    function prevStep() {
        document.getElementById('step2').classList.remove('active');
        document.getElementById('step1').classList.add('active');
    }