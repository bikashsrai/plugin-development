//Register your  block

const { registerBlockType } = wp.blocks;
const { RichText } = wp.blockEditor;
registerBlockType("myguten-block/test-block", {
  title: "events",
  icon: "smiley",
  category: "layout",

  attributes: {
    content: {
      type: "array",
      source: "children",
      selector: "p",
    },
  },
  edit: (props) => {
    console.log("edit-props", props);
    const { attributes, setAttributes, className } = props;
    const onChangeContent = (newContent) => {
      setAttributes({ content: newContent });
    };
    return (
      <RichText
        tagName="p"
        className={className}
        onChange={onChangeContent}
        value={attributes.content}
      />
    );
  },
  save: (props) => {
    console.log("save-method-props", props);
    return (
      <RichText.Content
        tagName="p"
        className={props.attributes.className}
        value={props.attributes.content}
      />
    );
  },
});
