const calendarTable = document.querySelector('.calendar-table tbody');
const monthYear = document.querySelector('.month-year');
const prevMonthButton = document.querySelector('.prev-month');
const nextMonthButton = document.querySelector('.next-month');
const addEventButton = document.getElementById('add-event');
const deleteEventButton = document.getElementById('delete-event');
const eventForm = document.querySelector('.event-form');
const datePicker = document.querySelector('.date-picker');
const addEventButton2 = document.getElementById('add-event-button');
const exitCalendarButton = document.getElementById('exit-calendar');
const exitEventFormButton = document.getElementById('exit-event-form');

let currentMonth = new Date().getMonth();
let currentYear = new Date().getFullYear();
let clickedCell = null;

function generateCalendar() {
    calendarTable.innerHTML = ''; // Clear the existing calendar

    const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
    const firstDay = new Date(currentYear, currentMonth, 1).getDay();
    
    let row = document.createElement('tr'); // Create a new row for the calendar
    
    // Add empty cells for days before the first day of the month
    for (let i = 0; i < firstDay; i++) {
        const cell = document.createElement('td');
        row.appendChild(cell); // Add empty cell to the row
    }

    // Add cells for days of the month
    for (let i = 1; i <= daysInMonth; i++) {
        const cell = document.createElement('td');
        cell.textContent = i;
        row.appendChild(cell);

        // Add event listeners to each cell
        cell.addEventListener('click', handleEventClick);

        // Start a new row after Saturday (index 6)
        if ((firstDay + i) % 7 === 0) {
            calendarTable.appendChild(row);
            row = document.createElement('tr'); // Start a new row
        }
    }

    // Append the last row (if it has any remaining cells)
    if (row.children.length > 0) {
        calendarTable.appendChild(row);
    }

    // Update month and year display
    monthYear.textContent = new Date(currentYear, currentMonth).toLocaleString('default', { month: 'long', year: 'numeric' });
}

function handleEventClick(event) {
    clickedCell = event.target.closest('td'); // Store the clicked cell
    const date = new Date(currentYear, currentMonth, parseInt(clickedCell.textContent));

    // Display event form with selected date
    eventForm.style.display = 'block';
    document.getElementById('event-title').value = '';
    document.getElementById('event-description').value = '';
}

addEventButton.addEventListener('click', () => {
    const title = document.getElementById('event-title').value;
    const description = document.getElementById('event-description').value;

    // Only add event if title is provided
    if (title.trim() && clickedCell) {
        const eventElement = document.createElement('div');
        eventElement.classList.add('event');
        eventElement.textContent = title;
        clickedCell.appendChild(eventElement);
    }

    // Hide event form
    eventForm.style.display = 'none';
});

deleteEventButton.addEventListener('click', () => {
    if (clickedCell) {
        const eventElement = clickedCell.querySelector('.event');
        if (eventElement) {
            clickedCell.removeChild(eventElement);
        }
    }
});

exitEventFormButton.addEventListener('click', () => {
    eventForm.style.display = 'none';
});

function handleDatePickerChange() {
    const selectedDate = new Date(datePicker.value);
    const day = selectedDate.getDate();

    // Update current month and year
    currentMonth = selectedDate.getMonth();
    currentYear = selectedDate.getFullYear();

    // Regenerate calendar
    generateCalendar();

    // Highlight selected day
    const cells = calendarTable.querySelectorAll('td');
    cells.forEach(cell => {
        if (parseInt(cell.textContent) === day) {
            cell.classList.add('selected-day');
        } else {
            cell.classList.remove('selected-day');
        }
    });
}

addEventButton2.addEventListener('click', () => {
    const selectedDate = new Date(datePicker.value);
    const day = selectedDate.getDate();

    // Update current month and year
    currentMonth = selectedDate.getMonth();
    currentYear = selectedDate.getFullYear();

    // Regenerate calendar
    generateCalendar();

    // Highlight selected day
    const cells = calendarTable.querySelectorAll('td');
    cells.forEach(cell => {
        if (parseInt(cell.textContent) === day) {
            cell.classList.add('selected-day');
        } else {
            cell.classList.remove('selected-day');
        }
    });
});

// Initialize calendar
generateCalendar();

// Event listeners for navigation buttons
prevMonthButton.addEventListener('click', () => {
    currentMonth--;
    if (currentMonth < 0) {
        currentMonth = 11;
        currentYear--;
    }
    generateCalendar();
});

nextMonthButton.addEventListener('click', () => {
    currentMonth++;
    if (currentMonth > 11) {
        currentMonth = 0;
        currentYear++;
    }
    generateCalendar();
});

// Event listener for date picker
datePicker.addEventListener('change', handleDatePickerChange);

// Exit Calendar Button functionality
exitCalendarButton.addEventListener('click', () => {
    // You can add code here to handle exiting the calendar,
    // such as redirecting to another page or closing the window.
    alert("Exiting the Calendar!"); // Example - Replace with your logic
});
