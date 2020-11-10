<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
            integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="styles/index.css">

        <title>Chit Chat</title>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="header-logo">
                    <img src="images/chit-chat-logo.png" width="100">
                    <div class="menu">
                        <ul>
                            <li><a href="formLogin.php">Login</a></li>
                            <li><a href="#">Home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="container mt-5">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="form-group">
                        <textarea
                        type="text"
                        class="form-control"
                        id="content"
                        name="content"
                        rows="8"
                        placeholder="What are you thinking? Chit chat now..."
                        required
                        ></textarea>
                        <input type="submit" onclick="addStatus()" class="btn btn-primary mt-1" value="Share">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div>
                            <h4>Shikadai28</h4>
                            <p>Sore hari yang tidak cerah karena hujan, maka aku akan tertidur pulas dan menenangkan pikiran</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script
            src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
            integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
            crossorigin="anonymous"
        ></script>
        <script>

            var dataStatus = {

            }

            function showStatus() {
                var listStatus = document.getElementById("status");
                // Clear barang
                listStatus.innerHTML = "";

                // Print Status
                for(let i = 0; i <a dataStatus.length; i++) {
                    var btnEdit = "<a href='#' onclick='editStatus("+i+")'>Edit</a>";
                    var btnDelete = "<a href='#' onclick='deleteStatus("+i+")'>Edit</a>";

                    listStatus.innetHTML += "<li>" + listStatus[i] + " ["+btnEdit + " | " + btnDelete + "] </li>";
                }
            }

            function addStatus() {
                var input = document.querySelector("input[name=content]");
                dataStatus.push(input.value);
                showStatus();
            }

            function editStatus() {
                var newStatus = prompt("Nama baru", listStatus[id]);
                listStatus[id] = newStatus;
                showStatus();
            }

            function deleteStatus(id) {
                listStatus.splice(id, 1);
                showStatus();
            }

            showStatus();
        </script>
    </body>
</html>