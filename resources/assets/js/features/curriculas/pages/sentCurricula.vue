<template>
        <div class = "cards">
                <v-layout row wrap>
                    <v-flex xs12 v-for="card in cards" :key="card.name">
                        <v-card class="mb-2">hello</v-card>
                    </v-flex>
                </v-layout>    
        </div>
</template>

<script>
export default {
    data() {
        return {
            cards: {name: 'Jorge Vieira da Silva',
            role: 'Estágio',
            submissionDate: '14/01/2019',
            phone: '(87) 98812-1212',
            email: 'jorgesilva@hotmail.com',
            github: '/jorgevcod',
            linkedin: '/jorgevthecoder',
            tags: ['front-end', 'back-end', 'designer']}
        }
    }
}
</script>
