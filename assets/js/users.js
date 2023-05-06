if ([null, undefined].includes(getToken())) {
  window.location.href = "login.php";
} else {
  if (![1, 2].includes(decode_jwt(getToken()).data.idroles)) {
    window.location.href = "405.php";
  }
}

const dataTableUsers = (rows) => {
  const table = $("#table-users").DataTable({
    scrollY: 450,
    data: rows,
    columns: [
      { data: "idusers" },
      { data: "users_name" },
      { data: "users_lastname" },
      { data: "users_address" },
      { data: "users_document" },
      { data: "users_document_types" },
      { data: "users_email" },
      { data: "users_phone" },
    ],
    createdRow: function (row, data, dataIndex) {
      // $.each($('td', row), function(colIndex) {
      //   if (colIndex == 1) {
      //     $(this).attr('data-name', 'judet');
      //     $(this).attr('class', 'judet');
      //     $(this).attr('data-type', 'text');
      //     $(this).attr('data-pk', data.job);
      //   }
      // });
    },
  });

  //En lazando botones de la tabla
  // table.on("click", "#btnEdit", function () {
  //   var data = table.row($(this).parents("tr")).data();
  //   alert(data["name"]);
  // });

  // table.on("click", "#btnDelete", function () {
  //   var data = table.row($(this).parents("tr")).data();
  //   alert(data["salary"]);
  // });
};

const readUsers = () => {
  axios
    .get(`${host}/api/admin/users/read`, {
      headers: {
        "Content-Type": "application/json",
        Authorization: "Bearer " + getToken(),
      },
    })
    .then((res) => {
      if (!res.data.status) {
        dataTableUsers(res.data);
      }
    });
};

document.getElementById("refresh-btn").addEventListener("click", () => {
  console.log("click reload");
});

console.log();
readUsers();
