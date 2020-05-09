<template>
  <v-app id="inspire">
    <v-content>
      <v-container
        class="fill-height"
        fluid
      >
        <v-row
          align="center"
          justify="center"
        >
          <v-col
            cols="12"
            sm="8"
            md="4"
          >
            <v-card class="elevation-12">
              <v-toolbar
                color="primary"
                dark
                flat
              >
                <v-toolbar-title>Login</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-tooltip bottom>
                  <template v-slot:activator="{ on }">
                    <v-btn
                      :href="source"
                      icon
                      large
                      target="_blank"
                      v-on="on"
                    >
                      <v-icon>mdi-code-tags</v-icon>
                    </v-btn>
                  </template>
                  <span>Source</span>
                </v-tooltip>
              </v-toolbar>
              <v-card-text>
                <v-form>
                  <v-text-field
                    id="email"
                    label="Email"
                    name="login"
                    prepend-icon="person"
                    type="text" v-model="email"
                  ></v-text-field>

                  <v-text-field
                    id="password"
                    label="Password"
                    name="password"
                    prepend-icon="lock"
                    type="password"
                    v-model="password"
                  ></v-text-field>
                </v-form>
              </v-card-text>
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn @click="login" color="primary">Entrar</v-btn>
              </v-card-actions>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </v-content>
  </v-app>
</template>

<script>
  export default {
    data(){
            return {
                email: '',
                password : ''
            }
    },
    props: {
      source: String,
    },
    methods: {
        login(){//this hace referencia a los datos
            //definimos el objeto
            console.log("listo");
            const params = {
                email : this.email,
                password : this.password
            };
            // console.log(params);
            // console.log(params.descripcion);
            if (params.email != "" && params.password != "") {
                // this.descripcion = "";//limpiamos la variable del input
                axios.post('./login', params)
                .then((response) => {
                  window.location.href = "./home";
                });
            }else{
                
            }
                       
        }
    }
}
</script>