<template>
    <v-card class="ma-0 pa-0">
        <v-card class="ma-0 pa-0" flat :color="headerBackgroundColor" dark>
            <v-card-title>
                <v-layout column align-start  class="ma-0 pa-0">
                    <v-card-text class="headline ma-0 pa-0"> {{ card.name }} </v-card-text>
                    <v-card-text class="subheader green--text text--lighten-3 ma-0 pa-0"> {{ card.role }} - Submetido em {{ card.submissionDate }} </v-card-text>
                </v-layout>
                <v-spacer></v-spacer>
                <v-btn icon @click.prevent="$emit('download-pdf-curriculum', card.id)">
                    <v-icon> save_alt </v-icon>
                </v-btn>
                <v-btn icon @click.prevent="$emit('schedule-curriculum', card.id)">
                    <v-icon> calendar_today </v-icon>
                </v-btn>
                <v-btn icon @click.prevent="$emit('archive-curriculum', card.id)">
                    <v-icon> archive </v-icon>
                </v-btn>
            </v-card-title>
        </v-card>
        <v-container fluid class="px-2 mt-0 my-0 pb-0 mb-0">
            <v-layout row justify-space-around>
                <v-flex
                    grow
                    pa-1
                >
                    <v-input
                    class="grey--text"
                >
                    <slot name="prepend">
                        <v-icon color="grey">phone</v-icon>
                    </slot>
                    <v-container 
                        fluid 
                        class="ml-3 pa-0"
                        
                    >
                        <a :href="redirectPhone">{{ card.phone }}</a> 
                    </v-container>
                </v-input>
                <v-input
                    class="grey--text"
                >
                    <slot name="prepend">
                        <v-icon color="grey">email</v-icon>
                    </slot>
                    <v-container 
                        fluid 
                        class="ml-3 pa-0"
                    > 
                        <a :href="redirectEmail">{{ card.email }}</a> 
                    </v-container>
                </v-input>
                <v-input
                    class="grey--text"
                >
                    <slot name="prepend" v-if="curriculaHasGithub">
                        <v-icon color="grey">fab fa-github</v-icon>
                    </slot>
                    <v-container 
                        fluid 
                        class="ml-3 pa-0"
                    > 
                        <a :href="returnGithub"> {{ card.github }} </a> 
                    </v-container>
                </v-input>
                <v-input
                    class="grey--text"
                >
                    <slot name="prepend" v-if="curriculaHasLinkedin">
                        <v-icon color="grey">fab fa-linkedin</v-icon>
                    </slot>
                    <v-container 
                        fluid 
                        class="ml-3 pa-0"
                    > 
                        <a :href="returnLinkedin"> {{ card.linkedin }} </a> 
                    </v-container>
                </v-input>
                </v-flex>
                <v-flex
                shrink
                ca-1
                >
                <v-layout align-center justify-center row fill-height>
                    <v-rating 
                        v-model="card.stars" 
                        background-color="grey" 
                        color="yellow darken-1"
                        hover></v-rating>
                </v-layout>
                </v-flex>
            </v-layout>
        </v-container>
        <v-combobox
            class="ma-0 pa-0"
            background-color="#EFEBE9"
            v-model="chips"
            :items="card.tags"
            label="Adicionar Tags"
            chips
            append-icon="add_circle"
            hint=""
            solo
            multiple
            hide-details
            flat
            >
            <template v-slot:selection="data">
                <v-chip
                    color="#757575"
                    text-color="#F7F6F5"
                    :selected="data.selected"
                    close
                    @input="onClose(data)"
                    >
                    {{ data.item }}
                </v-chip>
            </template>
        </v-combobox>
    </v-card>
</template>

<script>

import SentCurricula from '../pages/SentCurricula'

export default {
    components: {
        SentCurricula,
    },

    props: {

        card: {
            type: Object,
            default: () => ({
                name: '',
            }),
        }
    },

    computed: {
        headerBackgroundColor () {
            if (this.card.role == "Estágio") {
                return "#009D4D";
            }
            else {
                return "#0277BD";
            }
        },

        curriculaHasGithub () {
            if (this.card.github) {
                return true;
            } else return false;
        },

        curriculaHasLinkedin () {
            if (this.card.linkedin) {
                return true;
            } else return false;
        },

        redirectPhone () {
            return "phoneto:" + this.card.phone;
        },

        redirectEmail () {
            return "mailto:" + this.card.email;
        },

        returnGithub () {
            return "https://github.com" + this.card.github;
        },

        returnLinkedin () {
            return "https://www.linkedin.com" + this.card.linkedin;
        }
    },

    data() {
        return {
            chips: [...this.card.tags],
        };
    },
    
    methods: {
        onClose(tag) {
            this.chips.splice(this.chips.indexOf(tag), 1);
            this.chips = [...this.chips];
        }
    }
}
</script>
