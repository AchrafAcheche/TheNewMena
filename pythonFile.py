import numpy as np
import pandas as pd
import seaborn as sns
import matplotlib.pyplot as plt
from sklearn.preprocessing import LabelEncoder, OneHotEncoder
from sklearn.compose import ColumnTransformer
from sklearn.model_selection import train_test_split
from sklearn.neighbors import KNeighborsClassifier
from sklearn import tree 
from sklearn import metrics 
from sklearn.tree import DecisionTreeClassifier
from sklearn.metrics import accuracy_score
from sklearn.ensemble import RandomForestClassifier 
from sklearn.preprocessing import LabelEncoder
import matplotlib.pyplot as plt
import pickle
import warnings
warnings.filterwarnings('ignore')

with open('model.pkl','rb') as f:
    fm=pickle.load(f)
data = np.array([[sys.argv[1]],sys.argv[2]])
df = pd.DataFrame(data)
pred = fm.predict(df)
print(pred)