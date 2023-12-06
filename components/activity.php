<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Pesan</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../app.css">
</head>

<body>
    <div class="container mt-7">
        <h1>aktivitas sistem</h1>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">default</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">advance</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">pengaturan</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <h3>Content for Tab 1</h3>
                <p>This is the content for Tab 1.</p>
            </div>
            <div class="tab-pane fade show active" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <h3>aktivitas sistem tambahan</h3>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    tambah aktivitas
                </button>

                <!-- Modal -->
                <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="width: 150%;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah aktivitas</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post">
                                    <h5>Nama aktivitas</h5>
                                    <input type="text" class="form-control" name="nama aktifitas" id="">
                                    <h5 class="mt-2">kondisi</h5>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <label for="sumber data">sumber data</label>
                                        </div>
                                        <select class="form-select form-select-sm w-30" name="sumber data" id="sumber data" onchange="updateOptions()">
                                            <option value=""></option>
                                            <option value="transaksi">transaksi</option>
                                            <option value="promo">promo</option>
                                        </select>
                                    </div>
                                    <div class="input-group mt-2">
                                        <div class="input-group-text">
                                            <label for="sumber data">jika</label>
                                        </div>
                                        <select class="form-select form-select-sm w-30" name="sumber data" id="jika" onchange="UpdateValue()">
                                        </select>
                                        <select class="form-select form-select-sm ms-1 me-1" name="sumber data">
                                            <option value="sama dengan">sama dengan</option>
                                            <option value="lebih dari">lebih dari</option>
                                            <option value="kurang dari">kurang dari</option>
                                        </select>
                                        <span id="awal"></span>
                                        <input class="form-control" name="sumber data" id="value">
                                        <span id="akhir"></span>
                                    </div>
                                    <h5 class="mt-3">Aktivitas</h5>
                                    <select class="form-select form-select-sm" name="sumber data">
                                        <option value="kirim pesan">kirim Pesan</option>
                                        <option value="kirim promo">kirim promo</option>
                                    </select>
                                    <div class="input-group mt-3">
                                        <span style="font-size: medium;">
                                            Feedback
                                        </span>
                                        <input type="checkbox" name="" id="cekFedback" class="form-check-input ms-2 me-2" onchange="cekFeedback()">
                                        <span id="Fedback"></span>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                <p>pengaturan</p>
            </div>
        </div>
    </div>

    <script>
        function updateOptions() {
            var select1 = document.getElementById("sumber data");
            var select2 = document.getElementById("jika");

            // Kosongkan opsi di select2
            select2.innerHTML = '';

            // Mendapatkan nilai yang dipilih di select
            var selectedValue = select1.value;

            // Membuat opsi baru untuk select2 berdasarkan pilihan di select1
            if (selectedValue === "transaksi") {
                var zero = document.createElement("option");
                zero.text = "";
                zero.value = "";
                select2.appendChild(zero);

                var option1 = document.createElement("option");
                option1.text = "jumlah transaksi";
                option1.value = "jumlah transaksi";
                select2.appendChild(option1);

                var option2 = document.createElement("option");
                option2.text = "transaksi terakhir";
                option2.value = "transaksi terakhir";
                select2.appendChild(option2);

                var option3 = document.createElement("option");
                option3.text = "rata-rata pembelian";
                option3.value = "rata-rata pembelian";
                select2.appendChild(option3);
            } else if (selectedValue === "promo") {
                var option3 = document.createElement("option");
                option3.text = "akhir promo";
                option3.value = "C";
                select2.appendChild(option3);

                var option4 = document.createElement("option");
                option4.text = "kouta promo";
                option4.value = "D";
                select2.appendChild(option4);
            }
        }

        function UpdateValue() {
            var select2 = document.getElementById("jika");
            var label1 = document.getElementById("awal");
            var label2 = document.getElementById("akhir");
            var selectedOption = select2.value;
            //membuat input baru dari pilihan opsi
            if (selectedOption === 'jumlah transaksi') {
                label1.innerHTML = '<div class="input-group-text"> <label for = "value"> Rp. </label> </div>';
                label2.innerHTML = "";
            } else if (selectedOption === 'transaksi terakhir') {
                label1.innerHTML = "";
                label2.innerHTML = '<div class="input-group-text"> <label for = "value"> hari </label> </div>';
            } else if (selectedOption === 'rata-rata pembelian') {
                label1.innerHTML = "";
                label2.innerHTML = '<div class="input-group-text"> <label for = "value"> item/bulan </label> </div>';
            }
        }

        function cekFeedback() {
            var Feedback = document.getElementById('Fedback');
            Feedback.innerHTML = '<input type="number" class="form-control"> <div class = "input-group-text" ><label > hari </label> </div>';

        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../app.js"></script>

</body>

</html>