<template>
    <ul class="people-list">
        <li class="person-item" v-for="person in people">
            <span class="position">{{ $index+1 | leadZero }}</span>
            <div class="avatarholder">{{ person.name | avatarChar }}</div>
            <div>{{ person.name }}</div>
            <div class="address">{{ person.address }}</div>
            <a href="#">Delete</a>
        </li>
    </ul>
</template>

<script>
    export default {
        props: {
            people: {
                type: Array,
                required: true,
                coerce: value => JSON.parse(value)
            }
        }
    }
</script>

<style>
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

.address {
    margin-right: auto;
    padding-left: 1em;
    padding-right: 1em;
}
</style>
