/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/dcurso.js":
/***/ (function(module, exports) {

Vue.component('registro', {
    template: '#registro_template',
    methods: {
        up: function up() {
            this.prioridad = this.prioridad - 1.1;
            this.$parent.ordenar();
            this.$parent.saving = true;
        },
        top: function top() {
            this.prioridad = 0.9;
            this.$parent.ordenar();
            this.$parent.saving = true;
        },
        down: function down() {
            last = this.$parent.last_registro;
            if (this.prioridad != last) {
                this.prioridad = this.prioridad + 1.1;
                this.$parent.ordenar();
                this.$parent.saving = true;
            };
        },
        bottom: function bottom() {
            last = this.$parent.last_registro;
            if (this.prioridad != last) {
                this.prioridad = last + 0.1;
                this.$parent.ordenar();
                this.$parent.saving = true;
            };
        }
    },
    computed: {},
    props: ['cdocente', 'curso_id', 'facultad_id', 'id', 'prioridad', 'sede_id', 'user_id', 'wdocente', 'sw_cambio', 'grupo_id']
});

var vm = new Vue({
    el: "#app",
    data: {
        registros: [],

        curso_id: "",
        facultad_id: "",
        sede_id: "",
        grupo_id: "",

        options: {
            grupo_id: "",
            curso_id: "",
            facultad_id: "",
            sede_id: ""
        },

        errors: [],
        request: [],

        saving: false
    },

    ready: function ready() {
        this.show();
    },

    computed: {
        last_registro: function last_registro() {
            return this.registros.length;
        }
    },

    methods: {
        show: function show() {
            this.options = {
                grupo_id: this.grupo_id,
                curso_id: this.curso_id,
                facultad_id: this.facultad_id,
                sede_id: this.sede_id
            };
            this.$http.post('/api/dcurso/index', this.options).then(function (response) {
                this.registros = response.data.data;
                this.saving = false;
                this.ordenar();
            }, function (response) {
                console.log('error');
                this.errors = response.data.errors;
            });
        },

        ordenar: function ordenar() {
            this.registros.sort(function (a, b) {
                return a.prioridad - b.prioridad;
            });
            // renumerar
            num = 0;
            for (xreg in this.registros) {
                this.registros[xreg].prioridad = ++num;
                this.registros[xreg].grupo_id = this.grupo_id;
            };
        },

        signUp: function signUp(logout, event) {
            event.preventDefault();
            this.$http.post('/api/dcurso/update', { registros: this.registros }).then(function (response) {
                this.saving = false;
                alert('Modificaciones grabadas');
                this.show;
            }, function (response) {
                alert('error');
            });
        }
    }
});

/***/ }),

/***/ 1:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./resources/assets/js/dcurso.js");


/***/ })

/******/ });