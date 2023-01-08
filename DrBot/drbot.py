from tkinter import *
import sys
import numpy as np
import pandas as pd

l1 = ['back_pain', 'constipation', 'abdominal_pain', 'diarrhoea', 'mild_fever', 'yellow_urine',
      'yellowing_of_eyes', 'acute_liver_failure', 'fluid_overload', 'swelling_of_stomach',
      'swelled_lymph_nodes', 'malaise', 'blurred_and_distorted_vision', 'phlegm', 'throat_irritation',
      'redness_of_eyes', 'sinus_pressure', 'runny_nose', 'congestion', 'chest_pain', 'weakness_in_limbs',
      'fast_heart_rate', 'pain_during_bowel_movements', 'pain_in_anal_region', 'bloody_stool',
      'irritation_in_anus', 'neck_pain', 'dizziness', 'cramps', 'bruising', 'obesity', 'swollen_legs',
      'swollen_blood_vessels', 'puffy_face_and_eyes', 'enlarged_thyroid', 'brittle_nails',
      'swollen_extremeties', 'excessive_hunger', 'extra_marital_contacts', 'drying_and_tingling_lips',
      'slurred_speech', 'knee_pain', 'hip_joint_pain', 'muscle_weakness', 'stiff_neck', 'swelling_joints',
      'movement_stiffness', 'spinning_movements', 'loss_of_balance', 'unsteadiness',
      'weakness_of_one_body_side', 'loss_of_smell', 'bladder_discomfort', 'foul_smell_of urine',
      'continuous_feel_of_urine', 'passage_of_gases', 'internal_itching', 'toxic_look_(typhos)',
      'depression', 'irritability', 'muscle_pain', 'altered_sensorium', 'red_spots_over_body', 'belly_pain',
      'abnormal_menstruation', 'dischromic _patches', 'watering_from_eyes', 'increased_appetite', 'polyuria',
      'family_history', 'mucoid_sputum',
      'rusty_sputum', 'lack_of_concentration', 'visual_disturbances', 'receiving_blood_transfusion',
      'receiving_unsterile_injections', 'coma', 'stomach_bleeding', 'distention_of_abdomen',
      'history_of_alcohol_consumption', 'fluid_overload', 'blood_in_sputum', 'prominent_veins_on_calf',
      'palpitations', 'painful_walking', 'pus_filled_pimples', 'blackheads', 'scurring', 'skin_peeling',
      'silver_like_dusting', 'small_dents_in_nails', 'inflammatory_nails', 'blister', 'red_sore_around_nose',
      'yellow_crust_ooze']

disease = ['Fungal infection', 'Allergy', 'GERD', 'Chronic cholestasis', 'Drug Reaction',
           'Peptic ulcer diseae', 'AIDS', 'Diabetes', 'Gastroenteritis', 'Bronchial Asthma', 'Hypertension',
           ' Migraine', 'Cervical spondylosis',
           'Paralysis (brain hemorrhage)', 'Jaundice', 'Malaria', 'Chicken pox', 'Dengue', 'Typhoid', 'hepatitis A',
           'Hepatitis B', 'Hepatitis C', 'Hepatitis D', 'Hepatitis E', 'Alcoholic hepatitis', 'Tuberculosis',
           'Common Cold', 'Pneumonia', 'Dimorphic hemmorhoids(piles)',
           'Heartattack', 'Varicoseveins', 'Hypothyroidism', 'Hyperthyroidism', 'Hypoglycemia', 'Osteoarthristis',
           'Arthritis', '(vertigo) Paroymsal  Positional Vertigo', 'Acne', 'Urinary tract infection', 'Psoriasis',
           'Impetigo']

l2 = []
for x in range(0, len(l1)):
    l2.append(0)

# TESTING DATA df -------------------------------------------------------------------------------------
df = pd.read_csv("DrBot/Training.csv")

df.replace({'prognosis': {'Fungal infection': 0, 'Allergy': 1, 'GERD': 2, 'Chronic cholestasis': 3, 'Drug Reaction': 4,
                          'Peptic ulcer diseae': 5, 'AIDS': 6, 'Diabetes ': 7, 'Gastroenteritis': 8,
                          'Bronchial Asthma': 9, 'Hypertension ': 10,
                          'Migraine': 11, 'Cervical spondylosis': 12,
                          'Paralysis (brain hemorrhage)': 13, 'Jaundice': 14, 'Malaria': 15, 'Chicken pox': 16,
                          'Dengue': 17, 'Typhoid': 18, 'hepatitis A': 19,
                          'Hepatitis B': 20, 'Hepatitis C': 21, 'Hepatitis D': 22, 'Hepatitis E': 23,
                          'Alcoholic hepatitis': 24, 'Tuberculosis': 25,
                          'Common Cold': 26, 'Pneumonia': 27, 'Dimorphic hemmorhoids(piles)': 28, 'Heart attack': 29,
                          'Varicose veins': 30, 'Hypothyroidism': 31,
                          'Hyperthyroidism': 32, 'Hypoglycemia': 33, 'Osteoarthristis': 34, 'Arthritis': 35,
                          '(vertigo) Paroymsal  Positional Vertigo': 36, 'Acne': 37, 'Urinary tract infection': 38,
                          'Psoriasis': 39,
                          'Impetigo': 40}}, inplace=True)

# print(df.head())

X = df[l1]

y = df[["prognosis"]]
np.ravel(y)
# print(y)

# TRAINING DATA tr --------------------------------------------------------------------------------
tr = pd.read_csv("DrBot/Testing.csv")
tr.replace({'prognosis': {'Fungal infection': 0, 'Allergy': 1, 'GERD': 2, 'Chronic cholestasis': 3, 'Drug Reaction': 4,
                          'Peptic ulcer diseae': 5, 'AIDS': 6, 'Diabetes ': 7, 'Gastroenteritis': 8,
                          'Bronchial Asthma': 9, 'Hypertension ': 10,
                          'Migraine': 11, 'Cervical spondylosis': 12,
                          'Paralysis (brain hemorrhage)': 13, 'Jaundice': 14, 'Malaria': 15, 'Chicken pox': 16,
                          'Dengue': 17, 'Typhoid': 18, 'hepatitis A': 19,
                          'Hepatitis B': 20, 'Hepatitis C': 21, 'Hepatitis D': 22, 'Hepatitis E': 23,
                          'Alcoholic hepatitis': 24, 'Tuberculosis': 25,
                          'Common Cold': 26, 'Pneumonia': 27, 'Dimorphic hemmorhoids(piles)': 28, 'Heart attack': 29,
                          'Varicose veins': 30, 'Hypothyroidism': 31,
                          'Hyperthyroidism': 32, 'Hypoglycemia': 33, 'Osteoarthristis': 34, 'Arthritis': 35,
                          '(vertigo) Paroymsal  Positional Vertigo': 36, 'Acne': 37, 'Urinary tract infection': 38,
                          'Psoriasis': 39,
                          'Impetigo': 40}}, inplace=True)

X_test = tr[l1]
y_test = tr[["prognosis"]]
np.ravel(y_test)

# ------------------------------------------------------------------------------------------------------
# def randomforest():
from sklearn.ensemble import RandomForestClassifier

clf4 = RandomForestClassifier()
clf4 = clf4.fit(X, np.ravel(y))

# calculating accuracy-------------------------------------------------------------------
from sklearn.metrics import accuracy_score
# y_pred = clf4.predict(X_test)
# print(accuracy_score(y_test, y_pred))
# print(accuracy_score(y_test, y_pred, normalize=False))
# -----------------------------------------------------

Symptom1 = sys.argv[1]
Symptom2 = sys.argv[2]
Symptom3 = sys.argv[3]

# Symptom1 = 'irritability'
# Symptom2 = 'pain_in_anal_region'
# Symptom3 = 'drying_and_tingling_lips'

diseasesymptoms = [Symptom1, Symptom2, Symptom3]
# diseasesymptoms = [Symptom1.get(), Symptom2.get(), Symptom3.get()]

for k in range(0, len(l1)):
    for z in diseasesymptoms:
        if (z == l1[k]):
            l2[k] = 1

inputtest = [l2]
predict = clf4.predict(inputtest)
predicted = predict[0]

h = 'no'
for a in range(0, len(disease)):
    if (predicted == a):
        h = 'yes'
        break

if h == 'yes':
    # t2.delete("1.0", END)
    # t2.insert(END, disease[a])
    result = disease[a]
    print(result)
else:
    # t2.delete("1.0", END)
    # t2.insert(END, "Not Found")
    result = "Not found"
    print(result)

# gui_stuff------------------------------------------------------------------------------------

# drbot = Tk()
# drbot.configure(background='sky blue')
#
# # entry variables
# Symptom1 = StringVar()
# Symptom1.set(None)
# Symptom2 = StringVar()
# Symptom2.set(None)
# Symptom3 = StringVar()
# Symptom3.set(None)
#
# S1Lb = Label(drbot, text="Symptom 1", fg="black", bg="sky blue")
# S1Lb.grid(row=7, column=0, pady=10, sticky=W)
#
# S2Lb = Label(drbot, text="Symptom 2", fg="black", bg="sky blue")
# S2Lb.grid(row=8, column=0, pady=10, sticky=W)
#
# S3Lb = Label(drbot, text="Symptom 3", fg="black", bg="sky blue")
# S3Lb.grid(row=9, column=0, pady=10, sticky=W)
#
# # Result
# randomforestLb = Label(drbot, text="Result", fg="black", bg="sky blue")
# randomforestLb.grid(row=15, column=0, pady=10, sticky=W)
#
# # Enter Symptoms
# OPTIONS = sorted(l1)
#
# S1En = OptionMenu(drbot, Symptom1, *OPTIONS)
# S1En.grid(row=7, column=1)
#
# S2En = OptionMenu(drbot, Symptom2, *OPTIONS)
# S2En.grid(row=8, column=1)
#
# S3En = OptionMenu(drbot, Symptom3, *OPTIONS)
# S3En.grid(row=9, column=1)
#
# # Predict button
# rnf = Button(drbot, text="Predict", command=randomforest, bg="green", fg="yellow")
# rnf.grid(row=12, column=1)
#
# # Result feild
# t2 = Text(drbot, height=1, width=20, bg="orange", fg="black")
# t2.grid(row=15, column=1, padx=10)
#
# drbot.mainloop()
