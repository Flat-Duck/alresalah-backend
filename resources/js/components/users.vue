<template>
    <div>
        <h2>
            Users
        </h2>
        <form @submit.prevent="addUser" class="mb-3">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" v-model="user.name">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="EMail" v-model="user.email">
            </div>
            <button type="submit" class="btn btn-info btn-block">Save</button>
        </form>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
                    <a class="page-link" href="#" @click="fetchUsers(pagination.prev_page_url)">Previous</a>
                </li>
                <li class="page-item disabled"><a class="page-link test-dark" href="#">Page {{ pagination.current_page
                    }} of {{ pagination.last_page }}</a></li>
                <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
                    <a class="page-link" href="#" @click="fetchUsers(pagination.next_page_url)">Next</a>
                </li>
            </ul>
        </nav>
        <div class="card card-body mb-2" v-for="user in users" v-bind:key="user.id">
            <h3>{{ user.name }}</h3>
            <p>{{ user.email }}</p>
            <hr>
            <button @click="editUser(user)" class="btn btn-warning mb-2">Edit</button>
            <button @click="deleteUser(user.id)" class="btn btn-danger">Delete</button>
        </div>
    </div>
</template>