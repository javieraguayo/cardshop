import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

export default new Router({
	routes: [
		{
			path: '/',
			name: 'home',
			component: require('./views/home')
		}
	],
	mode: 'history',
	scrollBehavior() {
		return {x:0, y:0}
	}
})