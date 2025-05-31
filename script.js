document.querySelectorAll('nav a').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        const targetId = this.getAttribute('href').substring(1);

        document.querySelectorAll('section').forEach(section => {
            section.classList.add('hidden');
        });

        document.getElementById(targetId).classList.remove('hidden');
    });
});

function toggleOfficialPage() {
    const officialPage = document.getElementById('official-page');
    officialPage.style.display = officialPage.style.display === 'none' || officialPage.style.display === '' ? 'block' : 'none';
}

document.addEventListener('scroll', function() {
    const button = document.getElementById('viewFullButton');
    const footer = document.querySelector('footer');
    const footerRect = footer.getBoundingClientRect();
    
    if (footerRect.top < window.innerHeight) {
        button.style.bottom = (window.innerHeight - footerRect.top + 10) + 'px';
    } else {
        button.style.bottom = '20px';
    }
});
document.addEventListener('scroll', function() {
    const button = document.getElementById('viewFullButton');
    const footer = document.querySelector('footer');
    const footerRect = footer.getBoundingClientRect();
    
    if (footerRect.top < window.innerHeight) {
        button.style.bottom = (window.innerHeight - footerRect.top + 10) + 'px';
        button.classList.add('square');
        button.textContent = '';
    } else {
        button.style.bottom = '20px';
        button.classList.remove('square');
        button.textContent = 'Ver Página Oficial';
    }
});
// Function to show a specific section and hide others
function showSection(sectionId) {
    // Get all sections
    const sections = document.querySelectorAll('.section');
    
    // Hide all sections
    sections.forEach(section => {
        section.style.display = 'none';
    });
    
    // Show the selected section
    const selectedSection = document.getElementById(sectionId);
    if (selectedSection) {
        selectedSection.style.display = 'block';
    }
}

// Optional: Show the default section on page load
document.addEventListener('DOMContentLoaded', () => {
    showSection('coming-soon'); // Change to your desired default section
});
function updateSelection(checkbox) {
    const selectedOptionsDiv = document.getElementById('selectedOptions');
    const checkmarks = document.querySelectorAll('.checkmark');
    const selected = [];

    checkmarks.forEach((mark) => {
        if (mark.checked) {
            selected.push(mark.parentNode.textContent.trim());
        }
    });

    selectedOptionsDiv.textContent = 'Selected Options: ' + selected.join(', ') || 'None';
}