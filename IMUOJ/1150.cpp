#include<iostream>;
using namespace std;
int main()
{
	int count=0, tmp[27],s;
	for (int i = 0; i <= 4; i++)
	{
		for (int j = 0; j <= 3; j++)
		{
			s = i * 3 + j * 5;
			int exist = 0;
			for (int k = 0; k < count; k++)
			{
				if (tmp[k] == s) exist = 1;
			}
			if (exist == 0&&s)
			{
				tmp[count] = s;
				count++;
			}
		}
	}
	cout << count << endl;
	//cin.get();
	//cin.get();
	return 0;
}