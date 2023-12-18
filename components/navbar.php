<header class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid m-5">
        <a class="navbar-brand" onclick="openSidebar()">
            <i class="fas fa-bars me-3"></i>
            CRM
        </a>
        <ul class="navbar-nav ml-auto">
            <a class="nav-link" href="#">
                <span id="notification-time" class="real-time" style="color: white; font-size: 16px"></span>
            </a>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="openNotification(event)">
                    <i class="fas fa-bell"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-user"></i>
                </a>
            </li>
        </ul>
    </div>
</header>

<script>
    // Skrip untuk jam (real-time)
    function updateRealTime() {
        var timeElement = document.getElementById('notification-time');
        setInterval(function() {
            var currentTime = new Date();
            var formattedTime = currentTime.toLocaleString('en-US', {
                hour: 'numeric',
                minute: 'numeric',
                hour12: true
            });
            timeElement.textContent = formattedTime;
        }, 1000);
    }

    updateRealTime();
</script>