#include<iostream>
#include<string>
#include<iomanip>
using namespace std;
int main()
{
	double grade[7],n;
	string name;
	while (cin >> n)
	{
		grade[0] = n;
		for (int i = 1; i < 7; i++)
		{
			cin >> grade[i];
		}
		cin >> name;
		for (int i = 0; i < 6; i++)
		{
			for (int j = 0; j < 6-i; j++)
			{
				if (grade[j] > grade[j + 1])swap(grade[j], grade[j + 1]);
			}
		}
		double sum = 0;
		for (int i = 1; i < 6; i++)
		{
			sum += grade[i];
		}
		cout << name<<" "<<fixed << setprecision(2) << sum / 5 << endl;
	}
}