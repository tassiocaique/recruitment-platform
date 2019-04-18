<template>
        <div class = "cards">
                <v-layout row wrap>
                    <v-flex xs12 v-for="card in cards" :key="card.name">
                        <card-component
                            :card="card"
                        />
                    </v-flex>
                </v-layout>    
        </div>
</template>

<script>

import cardComponent from '../components/AppCardComponent';

export default {

    components: {
        cardComponent,
    },

    data() {
        return {
            cards: [{name: 'Jorge Vieira da Silva',
            role: 'Estágio',
            submissionDate: '14/01/2019',
            phone: '(87) 98812-1212',
            email: 'jorgesilva@hotmail.com',
            github: '/jorgevcod',
            linkedin: '/jorgevthecoder',
            stars: 3,
            tags: ['front-end', 'back-end', 'designer'],
            }]
        }
    }
}
</script>
