<template>
  <div class="toolbar-7p">

    <v-toolbar color="deep-purple" dark app clipped-left fixed>
      <v-toolbar-title :style="$vuetify.breakpoint.smAndUp ? 'width: 300px; min-width: 250px' : 'min-width: 72px'" class="ml-0 pl-3">
        <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
        <span class="hidden-xs-only">7Pontos</span>
      </v-toolbar-title>
      <v-text-field
      light
      solo
      prepend-icon="search"
      placeholder="Search"
      style="max-width: 500px; min-width: 128px"
      ></v-text-field>
      <div class="d-flex align-center" style="margin-left: auto">
        <v-btn icon>
          <v-icon>apps</v-icon>
        </v-btn>
        <v-btn icon>
          <v-icon>notifications</v-icon>
        </v-btn>
        <v-menu offset-x :close-on-content-click="false" :nudge-width="200" v-model="menu">
          <v-btn icon large slot="activator">
            <v-avatar size="32px">
              <img src="http://bootstrap.gallery/everest-v3/img/user4.jpg" alt="Vuetify">
            </v-avatar>
          </v-btn>
          <v-card>
            <v-list>
              <v-list-tile avatar>
                <v-list-tile-avatar>
                  <img src="http://bootstrap.gallery/everest-v3/img/user4.jpg" alt="John">
                </v-list-tile-avatar>
                <v-list-tile-content>
                  <v-list-tile-title>{{this.user.name}}</v-list-tile-title>
                  <v-list-tile-sub-title>{{this.user.email}}</v-list-tile-sub-title>
                </v-list-tile-content>
              </v-list-tile>
            </v-list>
            <v-divider></v-divider>
            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn color="red" flat @click="menu = false">Sair</v-btn>
            </v-card-actions>
          </v-card>
        </v-menu>
      </div>
    </v-toolbar>

    <v-navigation-drawer fixed clipped app v-model="drawer">
      <v-list dense>
        <template v-for="(item, i) in items">
          <v-layout row v-if="item.heading" align-center :key="i">
            <v-flex xs6>
              <v-subheader v-if="item.heading">
                {{ item.heading }}
              </v-subheader>
            </v-flex>
            <v-flex xs6 class="text-xs-center">
              <a href="#!" class="body-2 black--text">EDIT</a>
            </v-flex>
          </v-layout>
          <v-list-group v-else-if="item.children" v-model="item.model" no-action>
            <v-list-tile slot="item" @click="">
              <v-list-tile-action>
                <v-icon>{{ item.model ? item.icon : item['icon-alt'] }}</v-icon>
              </v-list-tile-action>
              <v-list-tile-content>
                <v-list-tile-title>
                  {{ item.text }}
                </v-list-tile-title>
              </v-list-tile-content>
            </v-list-tile>
            <v-list-tile
            v-for="(child, i) in item.children"
            :key="i"
            @click=""
            >
            <v-list-tile-action v-if="child.icon">
              <v-icon>{{ child.icon }}</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title>
                {{ child.text }}
              </v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
        </v-list-group>
        <v-list-tile v-else @click="">
          <v-list-tile-action>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title>
              {{ item.text }}
            </v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </template>
    </v-list>
  </v-navigation-drawer>


</div>
</template>

<script>
export default {
  props:['user'],
  data () {
    return {
      //menu
      menu: false,
      message: false,
      hints: true,


      drawer: null,
      items: [
        { icon: 'contacts', text: 'Vendas' },
        { icon: 'history', text: 'Produtos' },
        { icon: 'content_copy', text: 'Marketing' },
        { icon: 'settings', text: 'Soluções' },
      ]
    }
  },
  mounted() {
    console.log('Toolbar mounted.')
  }
}
</script>
