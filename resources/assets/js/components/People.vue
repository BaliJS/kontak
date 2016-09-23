<template>
    <ul class="people-list">
        <div class="search-container">
            <span class="counter">{{ filteredLength }}</span>
            <input type="text" class="form-control search" placeholder="Search... " v-model="search">
        </div>

        <li class="person-item" v-for="person in people | filterBy search | count">
            <span class="position">{{ $index+1 | leadZero }}</span>
            <div class="avatarholder">{{ person.name | avatarChar }}</div>
            <div class="info">
                <span class="info-item"><strong>{{ person.name }}</strong></span>
                <span class="info-item">{{ person.phone }}</span>
                <span class="info-item">{{ person.address }}</span>
            </div>
            <a href="#" @click.prevent="deletePerson(person.id)">Delete</a>
        </li>

        <div class="summary">
            Total : {{ total }}
        </div>
    </ul>
</template>

<script>
    export default {
        data() {
            return {
                search: ''
            }
        },
        props: {
            people: {
                type: Array,
                required: true,
                coerce: value => JSON.parse(value)
            }
        },
        computed: {
            total: function() {
                return this.people.length;
            }
        },
        methods: {
            deletePerson(id) {
                if (confirm('Are you sure ?')) {
                    this.people = this.people.filter(person => person.id != id);
                    this.$http.delete('/people/' + id)
                        .then(response => {
                            console.log(response.body);
                        });
                }

            }
        },
        filters: {
            count: function(arr) {
                this.$set('filteredLength', arr.length);
                return arr;
            }
        }
    }
</script>

<style>
.people-list {
    max-width: 600px;
}

.person-item {
    display: flex !important;
    justify-content: space-between !important;
    padding: 10px 0 !important;
    align-items: center;
}

.position {
    color: #00B1B4;
    font-weight: bold;
}

.avatarholder {
    margin-right: auto;
    margin-left: 1em;
}

.info {
    display: flex;
    flex-direction: column;
    margin-right: auto;
    width: 100%;
    padding-left: 1em;
}

.search-container {
    width: 100%;
    margin-bottom: 3em;
    display: flex;
    align-items: center;
}

.search {
    width: 100%;
    margin-left: 2em;
}

.counter {
    color: #ABABAB;
}
</style>
