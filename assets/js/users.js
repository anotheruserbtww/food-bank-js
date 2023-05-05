let id = 1;
const users = [
  {
    idusers: id,
    users_name: "Sergio",
    users_lastname: "Leon",
    users_address: "Calle 13",
    users_document: 1212,
    users_document_types: "CEDULA CIUDADANIA",
    users_email: "sergio@gmail.com",
    users_phone: 3154498121,
  },
];

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
  console.log("leyendo users");
  dataTableUsers(users);
};

document.getElementById("refresh-btn").addEventListener("click", () => {
  id++;

  users.push({
    idusers: id,
    users_name: "Carlos",
    users_lastname: "Guzman",
    users_address: "Calle 13",
    users_document: 1212,
    users_document_types: "CEDULA CIUDADANIA",
    users_email: "carlos@gmail.com",
    users_phone: 3154498121,
  });

  readUsers(users);
});

readUsers();
