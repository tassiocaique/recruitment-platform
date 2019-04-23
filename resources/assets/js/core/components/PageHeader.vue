<template>
	<v-toolbar
	color="primary"
	tabs
	>
		<img src="https://sysvale.com/img/sysvale-white.svg" width="146">
	
		<v-spacer></v-spacer>

		<v-toolbar-title class="white--text">{{ name }}</v-toolbar-title>

		<v-btn icon>
			<v-icon color="white">logout</v-icon>
		</v-btn>

		<template v-slot:extension>
				<v-tabs
					v-model="model"
					color="primary"
					slider-color="sliderColor"
				>
					<v-tab
						class="white--text"
						v-for="(i, index) in items"
						:key="index"
						:href="`#tab-${i.value}`"
					>
					{{ i.value }}
					</v-tab>

				</v-tabs>
			</template>

	</v-toolbar>
</template>

<script>
export default {
	data() {
		return {
			items: [{
				value: 'HOME'
			},
			{
				value: 'AGENDA'
			},
			{
				value: 'ARQUIVADOS'
			},
			],

			name: 'Tassio Caique',
		};
	}
	
}
</script>

