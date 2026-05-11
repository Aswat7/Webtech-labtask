// Elements
const form = document.getElementById('student-form');
const nameInput = document.getElementById('student-name');
const rollInput = document.getElementById('student-roll');
const addBtn = document.getElementById('add-btn');
const studentList = document.getElementById('student-list');
const totalStudents = document.getElementById('total-students');
const attendanceText = document.getElementById('attendance');
const searchInput = document.getElementById('search-student');
const highlightBtn = document.getElementById('highlight-first');
const sortBtn = document.getElementById('sort-az');

// Attendance counters
let presentCount = 0;
let absentCount = 0;

// Enable/disable Add button
nameInput.addEventListener('input', () => {
    addBtn.disabled = nameInput.value.trim() === '';
});

// Form submit
form.addEventListener('submit', addStudent);

function addStudent(e) {
    e.preventDefault();
    const name = nameInput.value.trim();
    const roll = rollInput.value.trim();
    if (!name || !roll) return;

    const li = document.createElement('li');
    li.classList.add('student-item');

    // Name & Roll
    const span = document.createElement('span');
    span.textContent = `${roll} - ${name}`;

    // Present checkbox
    const presentCheckbox = document.createElement('input');
    presentCheckbox.type = 'checkbox';
    presentCheckbox.title = 'Mark as present';
    presentCheckbox.addEventListener('change', () => toggleAttendance(li, presentCheckbox));

    // Edit button
    const editBtn = document.createElement('button');
    editBtn.textContent = 'Edit';
    editBtn.classList.add('btn-edit');
    editBtn.addEventListener('click', () => editStudent(li, span, presentCheckbox));

    // Delete button
    const deleteBtn = document.createElement('button');
    deleteBtn.textContent = 'Delete';
    deleteBtn.classList.add('btn-delete');
    deleteBtn.addEventListener('click', () => deleteStudent(li));

    li.appendChild(presentCheckbox);
    li.appendChild(span);
    li.appendChild(editBtn);
    li.appendChild(deleteBtn);

    studentList.appendChild(li);

    nameInput.value = '';
    rollInput.value = '';
    addBtn.disabled = true;

    updateTotal();
    updateAttendance();
}

// Edit student
function editStudent(li, span, checkbox) {
    const [rollOld, nameOld] = span.textContent.split(' - ');
    const newRoll = prompt('Enter new roll:', rollOld);
    const newName = prompt('Enter new name:', nameOld);
    if (newRoll && newName) {
        span.textContent = `${newRoll} - ${newName}`;
    }
}

// Delete student
function deleteStudent(li) {
    if (confirm('Are you sure you want to delete this student?')) {
        if (li.querySelector('input[type="checkbox"]').checked) presentCount--;
        else absentCount--;
        li.remove();
        updateTotal();
        updateAttendance();
    }
}

// Highlight all
function changeListStyle() {
    document.querySelectorAll('.student-item').forEach(student => {
        student.classList.toggle('highlight');
    });
}

// Toggle attendance
function toggleAttendance(li, checkbox) {
    if (checkbox.checked) {
        li.classList.add('present');
        presentCount++;
        absentCount--;
    } else {
        li.classList.remove('present');
        presentCount--;
        absentCount++;
    }
    updateAttendance();
}

// Update total
function updateTotal() {
    const total = studentList.children.length;
    totalStudents.textContent = `Total students: ${total}`;

    // Update absent count
    absentCount = total - presentCount;
    updateAttendance();
}

// Update attendance text
function updateAttendance() {
    attendanceText.textContent = `Present: ${presentCount}, Absent: ${absentCount}`;
}

// Search/filter students
searchInput.addEventListener('input', () => {
    const query = searchInput.value.toLowerCase();
    document.querySelectorAll('.student-item').forEach(item => {
        const name = item.querySelector('span').textContent.toLowerCase();
        item.style.display = name.includes(query) ? '' : 'none';
    });
});

// Highlight first student
highlightBtn.addEventListener('click', () => {
    document.querySelectorAll('.student-item').forEach(item => item.classList.remove('highlight'));
    const first = studentList.querySelector('.student-item');
    if (first) first.classList.add('highlight');
});

// Sort A-Z
sortBtn.addEventListener('click', () => {
    const students = Array.from(studentList.children);
    students.sort((a, b) => {
        const nameA = a.querySelector('span').textContent.toLowerCase();
        const nameB = b.querySelector('span').textContent.toLowerCase();
        return nameA.localeCompare(nameB);
    });
    students.forEach(li => studentList.appendChild(li));
});