<template>
    <Form
        :entity="entity"
        :submit="submit"
        :alert="alert"
        :loading="loading"
        @onSubmit="onSubmit('Creation')"
    />
</template>

<script>
import Form from "@/components/Form.vue";
import common from "@/mixins/common";
import forms from "@/mixins/forms";

export default {
    name: "PartnerCreate",
    components: {
        Form,
    },
    mixins: [common, forms],
    data() {
        return {
            entity: {
                label: this.$t("Partner Create Form"),
                route: "partners",
                fillables: [
                    {
                        codename: "name",
                        type: "text",
                        title: this.$t("Name"),
                        required: true,
                        validationMessage: this.$t("This field is required"),
                    },
                    {
                        codename: "bin",
                        type: "text",
                        title: this.$t("BIN"),
                        required: true,
                        validationMessage: this.$t("This field is required"),
                    },
                ],
                // fillables here
                name: null, // must match the codename
                // fillables end
            },
            submit: this.$t("Create"),
            loading: false,
            alert: {
                type: null,
                message: null,
            },
            data: null,
        };
    },
};
</script>
