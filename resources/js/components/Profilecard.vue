<template>
    <div class="card" style="width: 18rem;">
        <div class="mx-4">
            <img class="card-img-top mt-4 rounded-circle" :src="image">
            <div class="card-body text-center">
                <a :href="'/profiles/' + userid"><h5 class="card-title">{{ name }}</h5></a>
                <p class="card-text">{{ description }}</p>
            </div>
            <div class="progress mt-3">
                <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" :style="{ width: php + '%' }" :aria-valuenow="php" aria-valuemin="0" aria-valuemax="100">PHP</div>
            </div>
            <div class="progress mt-3">
                <div class="progress-bar progress-bar-animated progress-bar-striped bg-success" role="progressbar" :style="{ width: sql + '%' }" :aria-valuenow="sql" aria-valuemin="0" aria-valuemax="100">SQL</div>
            </div>
            <div class="progress mt-3">
                <div class="progress-bar progress-bar-animated progress-bar-striped bg-info" role="progressbar" :style="{ width: css + '%' }" :aria-valuenow="css" aria-valuemin="0" aria-valuemax="100">CSS</div>
            </div>
            <div class="progress mt-3">
                <div class="progress-bar progress-bar-animated progress-bar-striped bg-warning" role="progressbar" :style="{ width: javascript + '%' }" :aria-valuenow="javascript" aria-valuemin="0" aria-valuemax="100">JavaScript</div>
            </div>
            <div class="progress mt-3">
                <div class="progress-bar progress-bar-animated progress-bar-striped bg-danger" role="progressbar" :style="{ width: html + '%' }" :aria-valuenow="html" aria-valuemin="0" aria-valuemax="100">HTML</div>
            </div>
            <div class="card-body text-center">
                <a :href="'http://www.' + portfolio" class="card-link">Portfolio</a>
                <a :href="'http://www.github.com/' + github" class="card-link">GitHub</a>
                <a :href="'http://www.twitter.com/' + twitter" class="card-link">Twitter</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'userid',
            'name',
            'image',
            'description',
            'portfolio',
            'github',
            'twitter',
            'php',
            'sql',
            'css',
            'javascript',
            'html',
        ],
    }
</script>