document.addEventListener('DOMContentLoaded', function () {
    const checkboxes = document.querySelectorAll('.form-check-input');

    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            updateProgress();
        });
    });

    function updateProgress() {
        const totalCheckboxes = checkboxes.length;
        let checkedCount = 0;

        checkboxes.forEach(function (checkbox) {
            if (checkbox.checked) {
                checkedCount += parseInt(checkbox.getAttribute('data-value'));
            }
        });

        const overallProgress = (checkedCount / (totalCheckboxes * 10)) * 100; // Assuming each checkbox contributes 10% to the overall progress

        // Update the progress value in your form or send an asynchronous request to the server
        console.log('Overall Progress:', overallProgress);
    }
});