<template>
  <div class="message-me">
    <BContainer>
      <BRow>
        <BCol>
          <h1>Message Me</h1>
        </BCol>
      </BRow>
      <BRow>
        <BCol>
          <BForm>
            <BFormGroup>
              <BRow class="mb-1 mb-lg-0">
                <BCol cols="12" lg="4" offset-lg="2" class="pe-lg-0">
                  <BFormInput type="text" placeholder="Name" class="message-me__input message-me__input--text" v-model="form.name" :class="{ 'is-invalid': v$.form.name.$errors.length > 0 && v$.form.name.$dirty }"></BFormInput>
                  <b-form-invalid-feedback v-if="v$.form.name.$errors.length > 0 && v$.form.name.$dirty" class="text-start py-1 px-2">
                    Name is required and must be at least 3 characters.
                  </b-form-invalid-feedback>
                  <BFormInput type="email" placeholder="Email Address" class="message-me__input message-me__input--text" v-model="form.email" :class="{ 'is-invalid': v$.form.email.$errors.length > 0 && v$.form.email.$dirty }"></BFormInput>
                  <b-form-invalid-feedback v-if="v$.form.email.$errors.length > 0 && v$.form.email.$dirty" class="text-start py-1 px-2">
                    Email is required and must be a valid address.
                  </b-form-invalid-feedback>
                  <BFormSelect class="message-me__input message-me__input--select" v-model="form.subject" :class="{ 'is-invalid': v$.form.subject.$errors.length > 0 && v$.form.subject.$dirty }">
                    <BFormSelectOption value="Project Enquiry">Project Enquiry</BFormSelectOption>
                    <BFormSelectOption value="Feedback">Feedback</BFormSelectOption>
                    <BFormSelectOption value="Other">Other</BFormSelectOption>
                  </BFormSelect>
                  <b-form-invalid-feedback v-if="v$.form.subject.$errors.length > 0 && v$.form.subject.$dirty" class="text-start py-1 px-2">
                    Subject is required.
                  </b-form-invalid-feedback>
                </BCol>
                <BCol cols="12" lg="4" class="ps-lg-1">
                  <BFormTextarea placeholder="Your message..." class="message-me__input message-me__input--textarea" v-model="form.message" :class="{ 'is-invalid': v$.form.message.$errors.length > 0 && v$.form.message.$dirty }"></BFormTextarea>
                </BCol>
              </BRow>
              <BRow>
                <BCol cols="12" lg="4" offset-lg="2" class="pt-1 pe-lg-0" order="2" order-lg="1">
                  <BButton class="w-100" squared @click="resetForm">RESET</BButton>
                </BCol>
                <BCol cols="12" lg="4" class="pt-1 ps-lg-1" order="1" order-lg="2">
                  <BButton class="w-100" squared variant="success" @click="submitForm">SEND</BButton>
                </BCol>
              </BRow>
            </BFormGroup>
          </BForm>
        </BCol>
      </BRow>
    </BContainer>
  </div>
</template>

<style lang="scss">
@import '@/assets/styles/app.scss';

.message-me {
  @extend .text-center;
  @extend .py-5;
  background: url('@/assets/img/message-me.svg') no-repeat center center;
  background-size: cover;

  h1 {
    @extend .mb-5;
    color: #FFF;
    font-weight: 300;
    font-size: 24px;
  }

  .message-me__input {
    border-style: solid;
    border-radius: 0;
    @extend .py-2;
    @extend .px-3;


    &.message-me__input--text {
      @extend .mb-1;
    }

    &.message-me__input--textarea {
      @extend .h-100;
      @extend .mt-1;
      @extend .mt-lg-0;
    }
  }
}
</style>

<script lang="ts">
import {defineComponent} from 'vue'
import {BCol, BContainer, BForm, BFormGroup, BFormInput, BFormTextarea, BRow} from "bootstrap-vue-next";
import useVuelidate from "@vuelidate/core";
import {email, required} from "@vuelidate/validators";
import axios from "axios";
import { toast } from 'vue3-toastify';

export default defineComponent({
  name: "MessageMeComponent",
  components: {
    BContainer,
    BRow,
    BCol,
    BForm,
    BFormGroup,
    BFormInput,
    BFormTextarea
  },
  setup () {
    return { v$: useVuelidate() }
  },
  data() {
    return {
      form: {
        name: "",
        email: "",
        subject: "Project Enquiry",
        message: ""
      }
    }
  },
  validations () {
    return {
      form : {
        name: {
          required,
          min: 3
        },
        email: {
          required,
          email
        },
        subject: {
          required
        },
        message: {
          required,
          min: 10
        }
      }
    }
  },
  methods: {
    async submitForm () {
      const isFormCorrect = await this.v$.$validate()

      if (!isFormCorrect) {
        return
      }

      axios.defaults.headers.post['Content-Type'] = 'application/json';
      axios.post("https://formsubmit.co/ajax/me@tomaldy.com", this.form).then(() => {
        this.resetForm();
        toast.success('Your message has been submitted.',
            {
              position: "top-right"
            });
      })
          .catch(() => {
            toast.error('There was a problem submitting your message.',
                {
                  position: "top-right"
                });
          });

    },
    resetForm() {
      this.form = {
        name: "",
        email: "",
        subject: "Project Enquiry",
        message: ""
      }

      this.v$.$reset();
    }
  }
})
</script>
