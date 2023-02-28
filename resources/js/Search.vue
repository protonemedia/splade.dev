<template>
    <div id="docsearch" ref="docsearch" />
</template>

<script>
import docsearch from "@docsearch/js";
import "@docsearch/css";

export default {
    props: {
        appId: {
            type: String,
            required: true
        },

        apiKey: {
            type: String,
            required: true
        },

        indexName: {
            type: String,
            required: true
        },
    },


    mounted() {
        docsearch({
            appId: this.appId,
            apiKey: this.apiKey,
            indexName: this.indexName,
            container: this.$refs.docsearch
        });
    },
};
</script>
