panel.plugin("welcome-werkstatt/link-button-block", {
  blocks: {
    "link-button": {
      computed: {
        containerClasses: function () {
          return {
            "left-align": this.content.alignment === "left",
            "center-align": this.content.alignment === "center",
            "right-align": this.content.alignment === "right",
          };
        },
        buttonClasses: function () {
          return {
            "full-width": this.content.fullwidth,
            reverse: this.content.iconalignment === "right",
          };
        },
      },
      template: `
        <div v-bind:class="containerClasses" class="button-container">
          <a v-bind:class="buttonClasses" class="button-link" @click="open">
            <div v-if="content.icon" class="button-icon" v-html="content.icon"></div>
            <div v-if="content.caption" class="button-content">{{ content.caption }}</div>
          </a>
        </div>
      `,
    },
  },
});
