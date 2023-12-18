<?php
$conn = mysqli_connect("localhost", "root", "", "crm");

$query = "SELECT * FROM notifikasi";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query error: " . mysqli_error($conn));
}

// Fungsi untuk update status di database tabel notifikasi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $notificationId = $_POST['id'];

        $updateQuery = "UPDATE notifikasi SET status = 1 WHERE id = $notificationId";
        $updateResult = mysqli_query($conn, $updateQuery);

        if ($updateResult) {
            echo 'Status notifikasi diperbarui.';
        } else {
            echo 'Gagal memperbarui status notifikasi: ' . mysqli_error($conn);
        }
    } else {
        echo 'Invalid request.';
    }
} else {
    $query = "SELECT * FROM notifikasi";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }
}
?>
<!-- tampilan pada saat notifikasi diklik -->
<div id="notification-container">
    <div class="container-fluid">
        <p class="text-white" style="font-size: 20px; margin-top: -1px; margin-left: -0.9px;">Notifikasi</p>
    </div>
    <!-- mengambil data notifikasi dari database dengan metode looping -->
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        $notificationClass = ($row['status'] == 0) ? 'notification-1' : 'notification';
        $notificationLink = $row['link'];
        $tanggal = new DateTime();
        $tgl = new DateTime($row['tanggal']);
        $selisih = $tanggal->diff($tgl);

    ?>
        <div data-link="<?php echo $notificationLink; ?>" data-id="<?php echo $row['id']; ?>" class="<?php echo $notificationClass; ?>" onclick="handleNotificationClick(this)">
            <div class="header">
                <span class="icon bg-primary rounded-circle m-1 p-2"><i class="fas fa-bell"></i></span>
                <div class="notification-content">
                    <h4 class="notification-title"><?php echo $row['judul']; ?></h4>
                    <div class="text-muted">
                        <?=
                        $selisih->format('%R%a days'); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>

<script>
    //Skrip untuk membuka Notifikasi
    function openNotification(event) {
        var notificationContainer = document.getElementById('notification-container');
        var bellIcon = document.querySelector('.fas.fa-bell');
        var rect = bellIcon.getBoundingClientRect();
        notificationContainer.style.top = rect.bottom + 'px';
        notificationContainer.style.right = (window.innerWidth - rect.right) + 'px';

        if (notificationContainer.style.display === 'none') {
            document.addEventListener('click', closeNotificationOnOutsideClick);
            notificationContainer.style.display = 'block';
        } else {
            document.removeEventListener('click', closeNotificationOnOutsideClick);
            notificationContainer.style.display = 'none';
        }

        event.stopPropagation();
    }

    //Skrip untuk menutup Notifikasi ketika klik halaman di luar tampilan notifikasi
    function closeNotificationOnOutsideClick(event) {
        var notificationContainer = document.getElementById('notification-container');
        if (!notificationContainer.contains(event.target)) {
            document.removeEventListener('click', closeNotificationOnOutsideClick);
            notificationContainer.style.display = 'none';
        }
    }

    //Skrip untuk klik notifikasi yang melempar id untuk update status dan juga link untuk redirect
    function handleNotificationClick(element) {
        var notificationLink = element.getAttribute('data-link');
        var notificationId = element.getAttribute('data-id');

        if (notificationId) {
            updateNotificationStatus(notificationId, function() {
                if (notificationLink) {
                    window.location.href = notificationLink;
                }
            });
        }
    }

    //Skrip untuk mengupdate status notifikasi
    function updateNotificationStatus(notificationId, callback) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log('Status notifikasi diperbarui.');
                    if (callback && typeof callback === 'function') {
                        callback();
                    }
                } else {
                    console.error('Gagal memperbarui status notifikasi.');
                }
            }
        };

        var url = '<?= $page; ?>' + '.php';
        var params = 'id=' + encodeURIComponent(notificationId);
        xhr.open('POST', url, true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send(params);
    }
</script>