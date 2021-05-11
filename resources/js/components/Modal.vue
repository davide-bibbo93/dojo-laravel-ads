<template>
    <div
        ref="modal"
        class="modal"
        :class="visited || s_visited ? 'is-active' : ''"
    >
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head has-background-success is-justify-content-space-between">
                <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_CMYK_White.png" alt="Logo"/>
                <button
                    class="delete is-large"
                    aria-label="close"
                    @click="closeModal"
                ></button>
            </header>
            <section class="modal-card-body">

                <h3 class="is-size-1">€7.90</h3>
                <small>al mese</small>

                <ul>
                    <p><strong>L'abbonamento include:</strong></p>
                    <li>
                        Un abbonamento Spotify Premium <br>
                        (Senza pubblicità, ascolta offline)
                    </li>
                    <li>Nessuna modifica ai dati per l'ascolto di musica su Spotify Premium</li>
                    <li>Contratto di 12 mesi</li>
                </ul>
                <button class="button is-danger is-rounded is-large mt-6">Sottoscrivi</button>
            </section>
            <footer class="modal-card-foot is-justify-content-center">
                <a>O €9,90 al mese senza contratto</a>
            </footer>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["s_visited"],
        data() {
            return {
                visited: true
            };
        },
        methods: {
            closeModal() {
                this.$refs.modal.classList.remove("is-active");
            }
        },
        mounted() {
            if (!document.cookie.split("; ").find(row => row.startsWith("visited"))) {
                document.cookie = "visited=true";
            } else {
                this.visited = false;
            }
        }
    };
</script>

<style scoped>

    header img {
        height: 40px;
    }

    .modal-card-body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    ul {
        margin-top: 30px;
    }

    li {
        padding: 10px 0;
    }

</style>
