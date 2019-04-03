#include<iostream>
#include<string>
using namespace std;
struct data
{
	string id;
	string name;
	int grade1, grade2, grade3;
};
int main()
{
	struct data log[100];
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> log[i].id >> log[i].name >> log[i].grade1 >> log[i].grade2 >> log[i].grade3;
	}
	int s1=0, s2=0, s3=0, m=0,m_id;
	for (int i = 0; i < n; i++)
	{
		s1 += log[i].grade1;
		s2 += log[i].grade2;
		s3 += log[i].grade3;
		if (log[i].grade1 + log[i].grade2 + log[i].grade3>m)
		{
			m = log[i].grade1 + log[i].grade2 + log[i].grade3;
			m_id = i;
		}
	}
	cout << s1 / n << " " << s2 / n << " " << s3 / n << endl << log[m_id].id << " " << log[m_id].name << " " << log[m_id].grade1 <<" "<< log[m_id].grade2 <<" "<< log[m_id].grade3;
	//cin.get(); cin.get();
	return 0;
}