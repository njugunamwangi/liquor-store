<x-filament-panels::page class="grid h-full w-full place-items-center text-center">
    <script>
      document.addEventListener("DOMContentLoaded", function(event) {
        const stripe = Stripe("{{ config('services.stripe.key') }}", { apiVersion: '2023-10-16' });

        checkStatus();

        async function checkStatus() {
          const clientSecret = new URLSearchParams(window.location.search).get(
            "payment_intent_client_secret"
          );

          if (!clientSecret) {
            return;
          }

          const { paymentIntent } = await stripe.retrievePaymentIntent(clientSecret);
          console.log(paymentIntent);

          switch (paymentIntent.status) {
            case "succeeded":
              showMessage("Payment succeeded!");
              break;
            case "processing":
              showMessage("Your payment is processing.");
              break;
            case "requires_payment_method":
              showMessage("Your payment was not successful, please try again.");
              break;
            default:
              showMessage("Something went wrong.");
              break;
          }
        }

        // ------- UI helpers -------

        function showMessage(messageText) {
          const messageContainer = document.querySelector("#payment-message");

          messageContainer.classList.remove("hidden");
          messageContainer.textContent = messageText;
        }
      });
    </script>
    <div id="payment-message" class="hidden"></div>
</x-filament-panels::page>