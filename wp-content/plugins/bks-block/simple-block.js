wp.blocks.registerBlockType("bks-block/simple-block", {
  title: wp.i18n.__("Simple Block"),
  description: wp.i18n.__("This is the the description of blocks"),
  icon: "admin-customizer",
  category: "common",

  edit: function () {
    return wp.element.createElement(
      "p",
      { className: "custom-block" },
      "Hello Bikash "
    );
  },
  save: function () {
    return wp.element.createElement(
      "p",
      { className: "custom-block" },
      "This is save in database"
    );
  },
});
