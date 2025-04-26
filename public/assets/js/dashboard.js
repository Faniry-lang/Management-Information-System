const workspaceDropDown = document.getElementById('workspace-drop-down');
const dropDownIcon = document.getElementById('drop-down-icon');
const dropDownMenu = document.getElementById('drop-down-menu');
const sidebarItems = document.getElementById('sidebar-items');
const dashboardContent = document.getElementById('dashboard-content');

workspaceDropDown.addEventListener('click', (event) => {
    event.stopPropagation();
    
    if (dropDownIcon.classList.contains('flip')) {
        dropDownIcon.classList.remove('flip');
        dropDownIcon.classList.add('flip-back');
        dropDownMenu.classList.add('hidden');
        dropDownMenu.classList.remove('dropDownAnimation');
    } else {
        dropDownIcon.classList.remove('flip-back');
        dropDownIcon.classList.add('flip');
        dropDownMenu.classList.remove('hidden');
        dropDownMenu.classList.add('dropDownAnimation');
    }
});

document.addEventListener('click', () => {
    if (dropDownIcon.classList.contains('flip')) {
        dropDownIcon.classList.remove('flip');
        dropDownIcon.classList.add('flip-back');
        dropDownMenu.classList.remove('dropDownAnimation');
        dropDownMenu.classList.add('hidden');
    }
});

document.addEventListener("DOMContentLoaded", () => {
    const addButtons = document.querySelectorAll(".add-entry-form");

    addButtons.forEach(button => {
        button.addEventListener("click", () => {
            const tfoot = button.closest("tfoot");

            const rowToClone = tfoot.querySelector(".add-row");
            if (!rowToClone) return;

            const newRow = rowToClone.cloneNode(true);
            const existingRows = tfoot.querySelectorAll(".add-row");
            const newIndex = existingRows.length + 1;

            newRow.querySelectorAll(".inputs").forEach(input => {
                input.value = "";
                input.name = input.name.replace(/\[\d+\]/, `[${newIndex}]`);
            });

            tfoot.insertBefore(newRow, button.closest("tr"));
        });
    });

    document.querySelectorAll('.open-popup').forEach(trigger => {
        trigger.addEventListener('click', async (e) => {
            e.preventDefault();
            const popupId = trigger.dataset.popup;
            const popupContainer = document.getElementById('popupContainer');
            try {
                const res = await fetch(`/popups/${popupId}`);
                if (!res.ok) throw new Error('Erreur de chargement');
                const html = await res.text();
                popupContainer.innerHTML = html;
                const closeBtn = document.querySelector(".closePopup");
                const popup = document.querySelector(".popup");
                const overlay = document.querySelector(".overlay"); 

                closeBtn.addEventListener("click", (e) => {
                    e.preventDefault();
                    if (popup) popup.classList.add('hidden');
                    if (overlay) overlay.classList.add('hidden');
                });
                
            } catch (err) {
                console.error(err);
            }
        })
    });
});

function initChart() {
    if (typeof Chart === 'undefined') {
        const script = document.createElement('script');
        script.src = "https://cdn.jsdelivr.net/npm/chart.js";
        document.head.appendChild(script);
        script.onload = () => initChart(); 
    } else {
        const ctx = document.getElementById('recetteChart')?.getContext('2d');
        if (!ctx) return;
    
        const recetteChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Janvier', 'Février', 'Mars', 'Avril'],
                datasets: [{
                    label: 'Prévisions (€)',
                    data: [1200, 1500, 1100, 1700],
                    backgroundColor: 'rgba(59, 130, 246, 0.6)',
                    borderColor: 'rgba(59, 130, 246, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Réalisations (€)',
                    data: [1000, 1300, 900, 1600],
                    backgroundColor: 'rgba(16, 185, 129, 0.6)',
                    borderColor: 'rgba(16, 185, 129, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: { beginAtZero: true }
                },
                plugins: {
                    title: {
                        display: true,
                        text: 'Prévisions vs Réalisations',
                        font: { size: 18 }
                    }
                }
            }
        });
    }
}


