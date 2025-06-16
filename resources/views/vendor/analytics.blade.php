<!-- resources/views/partials/seller/analytics.blade.php -->
<div class="space-y-6">
    <h2 class="text-2xl font-bold mb-4">📊 تحليلات البائع</h2>

    <!-- الإحصائيات العامة -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow">
            <h3 class="text-lg font-semibold mb-1">إجمالي الطلبات</h3>
            <p class="text-3xl font-bold text-red-600">120</p>
        </div>
        <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow">
            <h3 class="text-lg font-semibold mb-1">إجمالي المنتجات</h3>
            <p class="text-3xl font-bold text-green-600">48</p>
        </div>
        <div class="bg-white dark:bg-gray-800 p-4 rounded-xl shadow">
            <h3 class="text-lg font-semibold mb-1">أرباح هذا الشهر</h3>
            <p class="text-3xl font-bold text-blue-600">75,000 DA</p>
        </div>
    </div>

    <!-- رسم بياني لنمو المبيعات -->
    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
        <h3 class="text-xl font-semibold mb-4">نمو المبيعات في آخر 6 أشهر</h3>
        <canvas id="salesChart" height="120"></canvas>
    </div>

    <!-- أكثر المنتجات مبيعًا -->
    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
        <h3 class="text-xl font-semibold mb-4">📈 أكثر المنتجات مبيعًا</h3>
        <canvas id="topProductsChart" height="120"></canvas>
    </div>

    <!-- توزيع الفئات -->
    <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow">
        <h3 class="text-xl font-semibold mb-4">📊 توزيع الفئات</h3>
        <canvas id="categoryChart" height="120"></canvas>
    </div>
</div>

<!-- تضمين Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('salesChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['يناير', 'فبراير', 'مارس', 'أبريل', 'ماي', 'يونيو'],
            datasets: [{
                label: 'المبيعات (DA)',
                data: [12000, 15000, 10000, 17000, 21000, 25000],
                borderColor: 'rgb(239 68 68)',
                backgroundColor: 'rgba(239, 68, 68, 0.2)',
                tension: 0.4,
                fill: true,
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    const topProductsCtx = document.getElementById('topProductsChart').getContext('2d');
    new Chart(topProductsCtx, {
        type: 'bar',
        data: {
            labels: ['هاتف A', 'سماعة B', 'كمبيوتر C', 'ساعة D'],
            datasets: [{
                label: 'عدد المبيعات',
                data: [40, 30, 25, 20],
                backgroundColor: ['#f87171', '#60a5fa', '#34d399', '#fbbf24']
            }]
        },
        options: {
            responsive: true,
            indexAxis: 'y',
            scales: {
                x: {
                    beginAtZero: true
                }
            }
        }
    });

    const categoryCtx = document.getElementById('categoryChart').getContext('2d');
    new Chart(categoryCtx, {
        type: 'doughnut',
        data: {
            labels: ['إلكترونيات', 'ملابس', 'إكسسوارات'],
            datasets: [{
                label: 'النسبة',
                data: [50, 30, 20],
                backgroundColor: ['#3b82f6', '#10b981', '#f97316']
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });
</script>
