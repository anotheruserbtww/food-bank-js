if ([null, undefined].includes(getToken())) {
  window.location.href = "login.php";
} else {
  if (![1, 2].includes(decode_jwt(getToken()).data.idroles)) {
    window.location.href = "405.php";
  }
}

const modal_edit = new bootstrap.Modal(getField("moda-edit-users"), {
  keyboard: false,
});

const dataTableUsers = (rows) => {
  const table = $("#table-users").DataTable({
    dom:
      "<'row'<'col-sm-12 col-md-3'l><'col-sm-12 col-md-5'B><'col-sm-12 col-md-4'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
    data: rows,
    scrollY: "400px",
    destroy: true,
    language: {
      url: "https://cdn.datatables.net/plug-ins/1.13.2/i18n/es-ES.json",
    },
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
      row.role = "button";
      row.addEventListener("click", () => modal_edit.show());
    },
  });

  // evento click a fila de la tabla
  if (rows.length > 0) {
    $("#table-users tbody").on("click", "tr", (e) => {
      const data = table.row(e.currentTarget).data();

      if (![null, "", false, undefined].includes(data)) {
        getField("users_name_e").value = data.users_name;
      }
    });
  }
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

getField("refresh-btn").addEventListener("click", () => {
  readUsers();
});

getField("btn-delete-users").addEventListener("click", () => {
  if (confirm("Está seguro de eliminar a este usuario?")) {
    console.log("eliminado");
    modal_edit.hide();
    readUsers();
  }
});

readUsers();
