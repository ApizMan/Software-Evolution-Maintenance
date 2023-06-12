<head>
    <title>Staff</title>
    <style>
        .h2 {
            font-family: "Poppins";
            font-weight: 900;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        th, .button-table {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        tr:hover {
            background-color: #D6EEEE;
        }

        .container-table {
            margin-left: 100px;
            margin-right: 100px;
            margin-bottom: 100px;
        }
    </style>
</head>

<br><br>
<center>
    <h2>List of Staff PETAKOM</h2>

    <div class="container-table">
        <a href="/register"><button class="btn btn-primary" style="float: right;">Add Staff</button></a>
        <br><br><br>
        <table>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th></th>
                <th></th>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="button-table"><button type="button" class="btn btn-success"><i class="fa fa-pen"><a
                                    href="staff/{{ $user->id }}/edit"
                                    style="text-decoration: none; color:black;"> Edit</a></i></button></td>
                    <td class="button-table"><button type="button" class="btn btn-danger"><i class="fa fa-trash"><a
                                    href="staff/{{ $user->id }}/delete"
                                    style="text-decoration: none; color:black;"
                                    onclick="return confirm('Are You Sure?')"> Delete</a></i></button></td>
                </tr>
            @endforeach
        </table>
    </div>
</center>
