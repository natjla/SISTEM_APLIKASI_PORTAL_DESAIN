"use strict";
$(function () {
  $("#datatable18").DataTable({
    responsive: true,
    columnDefs: [
      {
        targets: -1,
        title: "Actions",
        searchable: false,
        orderable: false,
        render: function render(data, type, full, meta) {
          return '\n          <button class="btn btn-label-primary btn-icon mr-1" data-bs-toggle="modal" data-bs-target="#edit">\n            <i class="fa fa-edit"></i>\n          </button>\n          <div class="dropdown d-inline">\n            <button class="btn btn-label-primary btn-icon" data-toggle="dropdown">\n              <i class="fa fa-trash"></i>\n            </button>\n            <div class="dropdown-menu dropdown-menu-right">\n              <button class="dropdown-item">\n                <div class="dropdown-icon">\n                  <i class="fa fa-trash"></i>\n                </div>\n                <span class="dropdown-content">Delete</span>\n              </button>\n              <button class="dropdown-item">\n                <div class="dropdown-icon">\n                  <i class="fa fa-pen"></i>\n                </div>\n                <span class="dropdown-content">Update status</span>\n              </button>\n              <button class="dropdown-item">\n                <div class="dropdown-icon">\n                  <i class="fa fa-print"></i>\n                </div>\n                <span class="dropdown-content">Generate report</span>\n              </button>\n            </div>\n          </div>\n      ';
        },
      },
      {
        targets: -2,
        render: function render(data, type, full, meta) {
          var status = [
            { title: "Success", state: "success" },
            { title: "Progress", state: "primary" },
            { title: "Suspended", state: "info" },
            { title: "Canceled", state: "danger" },
          ];
          return '<span class="badge badge-label-'.concat(status[data].state, '">').concat(status[data].title, "</span>");
        },
      },
    ],
  });
});
