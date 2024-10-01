<template>
    <AppLayout>
        <h1>Admin Dashboard</h1>
      <div class="dashboard-grid">
        <!-- Left Column -->
        <div class="left-column">
          <!-- Total Employees Card -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Total number of Employees:</h5>
              <h1 class="card-text">{{ totalEmployees }}</h1>
            </div>
          </div>

          <!-- Gender Distribution Card -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Gender Distribution</h5>
              <canvas id="genderChart"></canvas>
            </div>
          </div>
        </div>

        <!-- Right Column: Civil Status Distribution Card -->
        <div class="card civil-status-card">
          <div class="card-body">
            <h5 class="card-title">Civil Status Distribution</h5>
            <canvas id="civilStatusChart"></canvas>
          </div>
        </div>
      </div>
    </AppLayout>
  </template>

  <script>
  import { App } from '@inertiajs/inertia-vue3';
  import AppLayout from '@/Layouts/AppLayout.vue';
  import axios from 'axios';
  import { Chart, registerables } from 'chart.js';

  Chart.register(...registerables);

  export default {
    name: 'AdminDashboard',

    components: {
      AppLayout
    },

    data() {
      return {
        totalEmployees: 0,
        maleEmployees: 0,
        femaleEmployees: 0,
        civilStatusData: {}
      };
    },

    mounted() {
      this.fetchTotalEmployees();
      this.fetchGenderDistribution();
      this.fetchCivilStatusDistribution();
    },

    methods: {
      fetchTotalEmployees() {
        axios.get('/total-employees')
          .then(response => {
            this.totalEmployees = response.data.totalEmployees;
          })
          .catch(error => {
            console.error('Error fetching total employees:', error);
          });
      },

      fetchGenderDistribution() {
        axios.get('/gender-distribution')
          .then(response => {
            this.maleEmployees = response.data.male;
            this.femaleEmployees = response.data.female;
            this.renderGenderChart();
          })
          .catch(error => {
            console.error('Error fetching gender distribution:', error);
          });
      },

      fetchCivilStatusDistribution() {
        axios.get('/civil-status-distribution')
          .then(response => {
            this.civilStatusData = response.data;
            this.renderCivilStatusChart();
          })
          .catch(error => {
            console.error('Error fetching civil status distribution:', error);
          });
      },

      renderGenderChart() {

        const ctx = document.getElementById('genderChart').getContext('2d');
        new Chart(ctx, {
          type: 'pie',
          data: {
            labels: ['Male', 'Female'],
            datasets: [{
              data: [this.maleEmployees, this.femaleEmployees],
              backgroundColor: ['#36A2EB', '#FF6384']
            }]
          },
        });
      },

      renderCivilStatusChart() {
        const ctx = document.getElementById('civilStatusChart').getContext('2d');
        const civilStatusColors = {
            'Single': '#36A2EB', // Blue
            'Married': '#FF6384', // Red
            'Separated': '#4CAF50', // Green
            'Widowed': '#000000', // Black
            'Divorced': '#A9A9A9' // Grey
        };

        // Map the background colors based on the civilStatusData keys
        const backgroundColors = Object.keys(this.civilStatusData).map(status => civilStatusColors[status] || '#CCCCCC');

        new Chart(ctx, {
            type: 'bar',
            data: {
            labels: Object.keys(this.civilStatusData), // Civil statuses like 'Single', 'Married', etc.
            datasets: [{
                label: 'Number of Employees',
                data: Object.values(this.civilStatusData),
                backgroundColor: backgroundColors,
                borderColor: backgroundColors,
                borderWidth: 1
            }]
            },
            options: {
                plugins: {
                    legend: {
                    display: true, // Enable the legend
                    labels: {
                        generateLabels: function(chart) {
                        // Generate legend labels for each civil status
                        return Object.keys(civilStatusColors).map(function(status, index) {
                            return {
                            text: status,
                            fillStyle: civilStatusColors[status] // Use corresponding color for each status
                            };
                        });
                        }
                    }
                    }
                },
            scales: {
                y: {
                beginAtZero: true,
                ticks: {
                    display: false
                }
                }
            }
            }
        });
        }
    }
};
  </script>

  <style scoped>
  /* Layout the dashboard into two columns */
  .dashboard-grid {
    display: grid;
    grid-template-columns: 1fr 2fr; /* Left column smaller than right */
    gap: 20px; /* Space between the columns */
  }

  .left-column {
    display: flex;
    flex-direction: column;
  }

  .card {
    margin-top: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
  }

  .card-body {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .card-title {
    font-size: 1.5em;
    margin-bottom: 10px;
  }

  .card-text {
    font-size: 40px;
  }

  /* Ensure the civil status chart occupies the height of the two cards combined */
  .civil-status-card {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%; /* Full height of the parent container */
  }
  </style>
