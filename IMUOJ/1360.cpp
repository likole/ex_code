#include<iostream>
#include<string>
#include<iomanip>
using namespace std;
struct data
{
	int grade[7];
	string name;
};
int main()
{
	struct data log;
	while (cin >> log.grade[0])
	{
		for (int i = 1; i < 7; i++)
		{
			cin >> log.grade[i];
		}
		cin >> log.name;
		int m=0, M=0;
		for (int i = 0; i < 7; i++)
		{
			if (log.grade[i] < log.grade[m]) m = i;
			if (log.grade[i] > log.grade[M]) M = i;
		}
		int sum = 0;
		for (int i = 0; i < 7; i++)
		{
			sum += log.grade[i];
		}
		sum -= log.grade[m];
		sum -= log.grade[M];
		cout << log.name << " " << fixed << setprecision(2) << sum / 5.0<<endl;
	}
	return 0;
}