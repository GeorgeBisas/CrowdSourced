# CrowdSourced Project
 
 Η εργασία αυτή δημιουργήθηκε από τον Γεώργιο Μπίσα φοιτητή του τμήματος Μηχανικών Ηλεκτρονικών Υπολογιστών και Πληροφορικής του Πανεπιστημίου Πατρών.
 
Απεικόνιση στοιχείων σε χάρτη - διαχειριστής. 
Επιλέγοντας ένα εύρος τιμών, δηλαδή έτος, μήνα (Ιαν.-Δεκ.), ημέρα (Δευτέρα - Κυριακή),
ώρα (0-23) και δραστηριότητα, εμφανίζονται σε οθόνη χάρτη με μορφή σημείων οι πληροφορίες
τοποθεσίας των χρηστών. Ο διαχειριστής μπορεί να επιλέξει εύρος τιμών από τις παραπάνω
επιλογές, ήτοι έτη (π.χ. «2017-2019»), ημέρα (π.χ. «Σάββατο – Κυριακή»), ώρα (π.χ. «20:00 –
23:00»), δραστηριότητα με πολλαπλή επιλογή (π.χ. «WALKING και STILL»), ή για κάποιο κριτήριο να
επιλέξει «όλα». Επίσης απεικονίζεται με γράφημα η κατανομή των δραστηριοτήτων των χρηστών 
(ποσοστό εγγραφών ανά τύπο δραστηριότητας).

Διαγραφή δεδομένων - διαχειριστής. 
Επιλέγοντας αυτή τη λειτουργία και κατόπιν επιβεβαίωσης, το σύστημα
διαγράφει όλα τα δεδομένα στη βάση.

Εξαγωγή δεδομένων - διαχειριστής.
Έχουν υλοποιηθεί οι συναρτήσεις για την εξαγωγή των δεδομένων σε από json σε csv και xml.


Εγγραφή στο σύστημα. 
Ο χρηστής εγγράφεται και αποκτά πρόσβαση στο σύστημα επιλέγοντας κάποιο username & password της αρεσκείας του, 
και παρέχοντας το email του. Το password πρέπει να είναι τουλάχιστον 8 χαρακτήρες και να περιέχει τουλάχιστον ένα 
κεφαλαίο γράμμα, ένα αριθμό και κάποιο σύμβολο (π.χ. #$*&@). Το σύστημα δημιουργεί ένα μοναδικό αναγνωριστικό (user id) 
για τον κάθε εγγεγραμμένο χρήστη με τη χρήση 2-way encryption, χρησιμοποιώντας το email του χρήστη και κλειδί το 
password του χρήστη. Το password του χρήστη θα πρέπει να αποθηκεύεται στη συνέχεια στη ΒΔ ως hashed τιμή (π.χ. MD5).

Απεικόνιση στοιχείων χρήστη. 
Αμέσως μετά την είσοδο στο σύστημα, εμφανίζονται:
a. Το score οικολογικής μετακίνησης του χρήστη (ποσοστό τοποθεσιών με δραστηριότητα
σώματος σε σχέση με όλες τις δραστηριότητες μετακίνησης) για τον τρέχοντα μήνα. Για
παράδειγμα, αν έχει 100 τοποθεσίες με δραστηριότητα σώματος και 50 με όχημα, το σκορ
του είναι 100/150 = 66%. Επίσης εμφανίζεται γράφημα με το score του χρήστη για τους
τελευταίους 12 μήνες.
b. η περίοδος που καλύπτουν οι εγγραφές του χρήστη με γράφημα.

Ανάλυση στοιχείων χρήστη. 
Ο χρήστης επιλέγει ένα χρονικό διάστημα. Τα στοιχεία εμφανίζονται με τη  μορφή γραφημάτων που αφορούν 
το ποσοστό εγγραφών ανά είδος δραστηριότητας.

Upload δεδομένων. 
Ο χρήστης μπορεί να επιλέξει κάποιο αρχείο δεδομένων για να το ανεβάσει τη
ΒΔ.
