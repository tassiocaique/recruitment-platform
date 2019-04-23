<template>
        <div class = "cards">
                <v-layout row wrap>
                    <v-flex xs12 v-for="card in cards" :key="card.name">
                        <individual-card
                            :card="card"
                            @download-pdf-curriculum="downloadPDFCurriculumHandler"
                            @schedule-curriculum="scheduleCurriculumHandler"
                            @archive-curriculum="archiveCurriculumHandler"
                        />
                    </v-flex>
                </v-layout>    
        </div>
</template>

<script>

import IndividualCard from '../components/IndividualCard';

export default {

    components: {
        IndividualCard,
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
    },

    methods: {
        downloadPDFCurriculumHandler (id) {
            console.log ('Botão de download de PDF do curriculum');
        },

        scheduleCurriculumHandler (id) {
            console.log ('Botão de agendamento de entrevista');
        },

        archiveCurriculumHandler (id) {
            console.log ('Botão de arquivar curriculum');
        }
    }
}
</script>
