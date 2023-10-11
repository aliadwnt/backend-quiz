<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
    <title>Todo List</title>
</head>
<body>
    <div class="container">
    <h1>Todo List</h1>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tambahkan Acara</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Isikan Acara">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Deadline</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Isikan Acara">
    </div>
    <button type="button" class="btn btn-primary">Tambahkan</button>
    <br></br>
    <div class="mb-3">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Todo</th>
                <th>Deadline</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Belajar Membuat Project Codeigniter 4</td>
                <td>14/10/2023</td>
                <td>
                <button class="btn btn-danger">
                    <i class="bi bi-trash"></i> Hapus
                </button>
            </tr>
            <tr>
            </td>
                <td>2</td>
                <td>Belajar Membuat Controller Codeigniter 4</td>
                <td>14/10/2023</td>
                <td>
                <button class="btn btn-danger">
                    <i class="bi bi-trash"></i> Hapus
                </button>
                </td>
            </tr>
            <tr>
            </td>
                <td>3</td>
                <td>Belajar Membuat Model Codeigniter 4</td>
                <td>14/10/2023</td>
                <td>
                <button class="btn btn-danger">
                    <i class="bi bi-trash"></i> Hapus
                </button>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>